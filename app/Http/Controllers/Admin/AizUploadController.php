<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Upload;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Response;

class AizUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:manage file upload'])->only('index');
    }

    public function index(Request $request)
    {

        $allUploads = Upload::query();
        $search = null;
        $sortBy = null;

        if ($request->search != null) {
            $search = $request->search;
            $allUploads->where('file_original_name', 'like', '%' . $request->search . '%');
        }

        $sortBy = $request->sort;
        switch ($request->sort) {
            case 'newest':
                $allUploads->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $allUploads->orderBy('created_at', 'asc');
                break;
            case 'smallest':
                $allUploads->orderBy('file_size', 'asc');
                break;
            case 'largest':
                $allUploads->orderBy('file_size', 'desc');
                break;
            default:
                $allUploads->orderBy('created_at', 'desc');
                break;
        }

        $allUploads = $allUploads->paginate(60)->appends(request()->query());

        return view('admin.uploaded_files.index', compact('allUploads', 'search', 'sortBy'));
    }

    public function create()
    {
        return view('admin.uploaded_files.create');
    }

    public function showUploader(Request $request)
    {
        return view('uploader.aiz-uploader');
    }

    public function upload(Request $request)
    {

        $type = array(
            "jpg" => "image",
            "jpeg" => "image",
            "png" => "image",
            "svg" => "image",
            "webp" => "image",
            "gif" => "image",
            "mp4" => "video",
            "mpg" => "video",
            "mpeg" => "video",
            "webm" => "video",
            "ogg" => "video",
            "avi" => "video",
            "mov" => "video",
            "flv" => "video",
            "swf" => "video",
            "mkv" => "video",
            "wmv" => "video",
            "wma" => "audio",
            "aac" => "audio",
            "wav" => "audio",
            "mp3" => "audio",
            "zip" => "archive",
            "rar" => "archive",
            "7z" => "archive",
            "doc" => "document",
            "txt" => "document",
            "docx" => "document",
            "pdf" => "document",
            "csv" => "document",
            "xml" => "document",
            "ods" => "document",
            "xlr" => "document",
            "xls" => "document",
            "xlsx" => "document"
        );

        if ($request->hasFile('aiz_file')) {
            $upload = new Upload;
            $extension = strtolower($request->file('aiz_file')->getClientOriginalExtension());

            if (env('DEMO_MODE') == 'On'
                && isset($type[$extension])
                && $type[$extension] == 'archive'
            ) {
                return '{}';
            }

            if (isset($type[$extension])) {
                $upload->file_original_name = null;
                $arr = explode('.', $request->file('aiz_file')->getClientOriginalName());
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    if ($i == 0) {
                        $upload->file_original_name .= $arr[$i];
                    } else {
                        $upload->file_original_name .= "." . $arr[$i];
                    }
                }

                $path = $request->file('aiz_file')->store('uploads/all', 'local');
                $size = $request->file('aiz_file')->getSize();

                // Return MIME type ala mimetype extension
                $finfo = finfo_open(FILEINFO_MIME_TYPE);

                // Get the MIME type of the file
                $fileMime = finfo_file($finfo, base_path('public/') . $path);

                if ($type[$extension] == 'image' && getSetting('disable_image_optimization') != 1) {
                    try {
                        $img = Image::make($request->file('aiz_file')->getRealPath())->encode();
                        $height = $img->height();
                        $width = $img->width();
                        if ($width > $height && $width > 1500) {
                            $img->resize(
                                1500,
                                null,
                                function ($constraint) {
                                    $constraint->aspectRatio();
                                }
                            );
                        } elseif ($height > 1500) {
                            $img->resize(
                                null,
                                800,
                                function ($constraint) {
                                    $constraint->aspectRatio();
                                }
                            );
                        }
                        $img->save(base_path('public/') . $path);
                        clearstatcache();
                        $size = $img->filesize();
                    } catch (\Exception $e) {
                        //dd($e);
                    }
                }

                if (env('FILESYSTEM_DRIVER') == 's3') {
                    Storage::disk('s3')->put(
                        $path,
                        file_get_contents(base_path('public/') . $path),
                        [
                            'visibility' => 'public',
                            'ContentType' => $extension == 'svg' ? 'image/svg+xml' : $fileMime
                        ]
                    );
                    if ($arr[0] != 'updates') {
                        unlink(base_path('public/') . $path);
                    }
                }

                $upload->extension = $extension;
                $upload->file_name = $path;
                $upload->user_id = Auth::user()->id;
                $upload->type = $type[$upload->extension];
                $upload->file_size = $size;
                $upload->save();
            }
            return '{}';
        }
    }

    public function getUploadedFiles(Request $request)
    {
        $uploads = Upload::where('user_id', Auth::user()->id);
        if ($request->search != null) {
            $uploads->where('file_original_name', 'like', '%' . $request->search . '%');
        }
        if ($request->sort != null) {
            switch ($request->sort) {
                case 'newest':
                    $uploads->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $uploads->orderBy('created_at', 'asc');
                    break;
                case 'smallest':
                    $uploads->orderBy('file_size', 'asc');
                    break;
                case 'largest':
                    $uploads->orderBy('file_size', 'desc');
                    break;
                default:
                    // code...
                    break;
            }
        }
        return $uploads->paginate(60)->appends(request()->query());
    }

    public function destroy(Request $request, $id)
    {
        try {
            unlink(public_path() . '/' . Upload::where('id', $id)->first()->file_name);
            Upload::destroy($id);
            flash(translate('File deleted successfully'))->success();
        } catch (\Exception $e) {
            Upload::destroy($id);
            flash(translate('File deleted successfully'))->success();
        }
        return back();
    }


    public function getPreviewFiles(Request $request)
    {
        $ids = explode(',', $request->ids);
        $files = Upload::whereIn('id', $ids)->get();
        return $files;
    }

    //Download project attachment
    public function attachmentDownload($id)
    {
        $projectAttachment = Upload::find($id);
        try {
            $filePath = public_path($projectAttachment->file_name);
            return Response::download($filePath);
        } catch (\Exception $e) {
            flash(translate('File does not exist!'))->error();
            return back();
        }
    }

    //Download project attachment
    public function fileInfo(Request $request)
    {
        $file = Upload::findOrFail($request['id']);

        return view('admin.uploaded_files.info', compact('file'));
    }
}
