<div class="progress-step-content ">
    <h6 class="mb-2">Biography</h6>
    <p class="mb-4">Please provide a brief biography, limited to 2000 characters, which will be used in
        your public
        profile. Ensure that it conveys meaningful information you would like the client to know
        about you before engaging in your project
    </p>
    <x-form.countable-textarea rows="5" cols="10" max="2000" name="biography" wire:model.blur="biography" placeholder="e.g. Brief 2000 characters summary about your expertise."/>

    <h6 class="mb-2 mt-5">Upload your profile picture</h6>
    <p class="mb-5">Please upload the image you would like to appear in your profile</p>
    <div class="image-upload-preview">
        <div class="">
            <div class="uploaded-img-preview">
                @if($pictureUrl)
                     <img src="{{ $pictureUrl }}">
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133"
                        viewBox="0 0 132 133" fill="none">
                    <g clip-path="url(#clip0_38_2)">
                        <path
                            d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z"
                            fill="#B3C1CF"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_38_2">
                            <rect width="132" height="132" fill="white"
                                    transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                @endif
            </div>
            <p class="text-sm fst-italic my-1">
                Max 2MB 500px 500px
            </p>
        </div>
        <div>
            <label for="picture"
                    class="btn btn-outline-primary d-inline-flex align-items-center">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                        viewBox="0 0 25 24"
                        fill="none">
                    <path
                        d="M11.5 16V7.85L8.9 10.45L7.5 9L12.5 4L17.5 9L16.1 10.45L13.5 7.85V16H11.5ZM6.5 20C5.95 20 5.47917 19.8042 5.0875 19.4125C4.69583 19.0208 4.5 18.55 4.5 18V15H6.5V18H18.5V15H20.5V18C20.5 18.55 20.3042 19.0208 19.9125 19.4125C19.5208 19.8042 19.05 20 18.5 20H6.5Z"
                        fill="#0036E3"/>
                </svg>
                Upload Photo</label>
            <input type="file" wire:model.live="picture" id="picture" class="d-none">
            @error('picture')
                <div class="form-input-error-message">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
