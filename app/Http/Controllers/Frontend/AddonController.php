<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Addon;
use App\Models\SystemConfiguration;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;
use ZipArchive;

class AddonController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show addon manager'])->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('addon_zip')) {
            // Create update directory.
            $dir = 'addons';
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }

            $path = Storage::disk('local')->put('addons', $request->addon_zip);

            $zippedFileName = $request->addon_zip->getClientOriginalName();

            //Unzip uploaded update file and remove zip file.
            $zip = new ZipArchive;
            $res = $zip->open(base_path('public/' . $path));

            $randomDir = Str::random(10);

            $dir = trim($zip->getNameIndex(0), '/');

            if ($res === true) {
                $res = $zip->extractTo(base_path('temp/' . $randomDir . '/addons'));
                $zip->close();
            } else {
                dd('could not open');
            }

            $str = file_get_contents(base_path('temp/' . $randomDir . '/addons/' . $dir . '/config.json'));
            $json = json_decode($str, true);

            //dd($randomDir, $json);

            if (SystemConfiguration::where('type', 'current_version')->first()->value >= $json['minimum_item_version']) {
                if (count(Addon::where('unique_identifier', $json['unique_identifier'])->get()) == 0) {
                    $addon = new Addon;
                    $addon->name = $json['name'];
                    $addon->unique_identifier = $json['unique_identifier'];
                    $addon->version = $json['version'];
                    $addon->activated = 1;
                    $addon->image = $json['addon_banner'];
                    $addon->save();

                    // Create new directories.
                    if (!empty($json['directory'])) {
                        //dd($json['directory'][0]['name']);
                        foreach ($json['directory'][0]['name'] as $directory) {
                            if (is_dir(base_path($directory)) == false) {
                                mkdir(base_path($directory), 0777, true);
                            } else {
                                echo "error on creating directory";
                            }
                        }
                    }

                    // Create/Replace new files.
                    if (!empty($json['files'])) {
                        foreach ($json['files'] as $file) {
                            copy(base_path('temp/' . $randomDir . '/' . $file['root_directory']), base_path($file['update_directory']));
                        }
                    }

                    // Run sql modifications
                    $sqlPath = base_path('temp/' . $randomDir . '/addons/' . $dir . '/sql/install.sql');
                    if (file_exists($sqlPath)) {
                        DB::unprepared(file_get_contents($sqlPath));
                    }

                    flash(translate('Addon nstalled successfully'))->success();
                    return redirect()->route('addons.index');
                } else {
                    // Create new directories.
                    if (!empty($json['directory'])) {
                        //dd($json['directory'][0]['name']);
                        foreach ($json['directory'][0]['name'] as $directory) {
                            if (is_dir(base_path($directory)) == false) {
                                mkdir(base_path($directory), 0777, true);
                            } else {
                                echo "error on creating directory";
                            }
                        }
                    }

                    // Create/Replace new files.
                    if (!empty($json['files'])) {
                        foreach ($json['files'] as $file) {
                            copy(base_path('temp/' . $randomDir . '/' . $file['root_directory']), base_path($file['update_directory']));
                        }
                    }

                    $addon = Addon::where('unique_identifier', $json['unique_identifier'])->first();

                    for ($i = $addon->version + 0.1; $i <= $json['version']; $i = $i + 0.1) {
                        // Run sql modifications
                        $sqlPath = base_path('temp/' . $randomDir . '/addons/' . $dir . '/sql/' . $i . '.sql');
                        if (file_exists($sqlPath)) {
                            DB::unprepared(file_get_contents($sqlPath));
                        }
                    }

                    $addon->version = $json['version'];
                    $addon->save();

                    flash(translate('This addon is updated successfully'))->success();
                    return redirect()->route('addons.index');
                }
            } else {
                flash(translate('This version is not capable of installing Addons, Please update.'))->error();
                return redirect()->route('addons.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Addon $addon
     * @return \Illuminate\Http\Response
     */
    public function show(Addon $addon)
    {
        //
    }

    public function list()
    {
        //return view('backend.'.Auth::user()->role.'.addon.list')->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Addon $addon
     * @return \Illuminate\Http\Response
     */
    public function edit(Addon $addon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Addon $addon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Addon $addon
     * @return \Illuminate\Http\Response
     */
    public function activation(Request $request)
    {
        $addon = Addon::find($request->id);
        $addon->activated = $request->status;

        $addon->save();

        return 1;
    }
}
