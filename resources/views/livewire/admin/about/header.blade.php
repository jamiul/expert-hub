<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">Page title</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form wire:submit="save">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <label for="subtitle"
                                            class="form-label position-absolute level-subtitle">subtitle</label>
                                        <input id="subtitle" wire:model="header_subtitle" type="text" class="form-control admin-form-input "
                                            placeholder="Require steps" aria-label="First name">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative">
                                        {{-- <div class="upload-file">
                                            <label
                                                class="btn btn-default btn-file d-flex justify-content-center flex-column basic-file-upload gap-2">
                                                <span>
                                                    <input type="file" style="display: none;" required="">
                                                </span>
                                                <span class="edux-blog-upload"> <a href="#"><img
                                                            src=" {{ asset('assets/frontend/img/upload-icon.png') }}"></a></span>
                                                <h6 class="edux-click">Click to upload or
                                                    drag & drop</h6>
                                                <p>Drag & drop any images or documents that
                                                    might be helpful in explaining your
                                                    brief here</p>
                                            </label>
                                        </div> --}}
                                        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
                                        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
                                        <img src="{{ $aboutPage->headerImage() }}" alt="">
                                        <div
                                            wire:ignore
                                            x-data
                                            x-init="
                                                FilePond.setOptions({
                                                    allowMultiple: false,
                                                    server: {
                                                        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                                            @this.upload('header_image', file, load, error, progress)
                                                        },
                                                        revert: (fileName, load) => {
                                                            @this.removeUpload('header_image', fileName, load)
                                                        },
                                                    },
                                                    credits: {},
                                                    labelIdle: '<strong>Clik to upload or drag & drop</strong> <br> Drag & drop any images or documents that might be helpful in explaining your brief here'
                                                });
                                                FilePond.create($refs.input);
                                            "
                                        >
                                            <input type="file" x-ref="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="edux-frontend-left-title ">
                                        <button type="submit" class="save-update">Save
                                            Update</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
