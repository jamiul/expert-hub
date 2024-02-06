<div class="progress-step-content mt-40">
    <h6 class="mb-2">Consultation Summary
        <div class="tooltip-wrapper bottom-left">
            <i class="tooltip-icon"></i>
            <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Eum, placeat!
            </div>
        </div>
    </h6>

    <div class="edux-select-options position-relative">
        <x-form.textarea wire:model.defer="form.description"
            placeholder="e.g. Brief 300 words summary about your expertise." />
        <span class="edux-total-select-count">0/200</span>
    </div>

    <h6 class="mb-2 mt-5">Upload Consultation Service Picture
        <div class="tooltip-wrapper bottom-left">
            <i class="tooltip-icon"></i>
            <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Eum, placeat!
            </div>
        </div>
    </h6>

    <div class="image-upload-preview">
        <div class="">
            <div class="uploaded-img-preview">
                @if ($form->image)
                    <img src="{{ $form->image ? $form->image->temporaryUrl() : '' }}">
                @else
                    <img src="{{ $form->imageUrl }}">
                @endif
            </div>
            <p class="text-sm fst-italic my-1">
                Max 2MB 500px 500px
            </p>
        </div>
        <div>
            <label for="upload-file" class="btn btn-outline-primary d-inline-flex align-items-center">
                <x-icon.upload fill="#0059C999" />
                Upload Photo
            </label>
            <input type="file" id="upload-file" class="d-none" wire:model="form.image">
            @error('form.image')
                <div class="form-input-error-message">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>