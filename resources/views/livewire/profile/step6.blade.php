<div class="timeline-right">
    <div class="upload-picture">
        <h3>Upload your profile picture</h3>
        <p>Please upload the image you would like to appear in your profile</p>
    </div>
    <div class="upload-user">
        <div class="upload-user-img">
            @if ($picture) 
                <img style="max-width:220px;" src="{{ $picture->temporaryUrl() }}">
            @else
                <img style="max-width:220px;" src="{{ asset('assets/frontend/img/upload-user.jpg') }}">
            @endif
        </div>
        <p>Max 2MB 500px 500px</p>
        <div class="upload-uder-btn">
            <img src="{{ asset('assets/frontend/img/upload-user-icon.png') }}">
            <input type="file" id="myFile" wire:model="picture">
            Upload Photo
        </div>
        <div class="remove-picture">
            @error('picture')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <button class="link-button" wire:click="removePicture" >Remove picture</button>
        </div>
    </div>
    <div class="preview-your-Profile-btn d-flex flex-column align-items-center">
        <P>Initial steps in creating your profile are now complete!</p>
        <button class="button button-sm button-primary" wire:click="previewProfile">Preview your Profile</button>
    </div>
    @include('livewire.profile.buttons')
</div>