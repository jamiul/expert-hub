<div class="page-block">
    <div class="card card-24">
        <div class="card-body">
            <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                <div class="d-flex gap-2 align-items-center">
                    <x-icon.user-tie />
                    <h3 class="h5 mb-0">Biography</h3>
                    <button class="icon-btn">
                        <x-icon.info fill="#C8C5D4" />
                    </button>
                </div>

                {{-- <button class="icon-btn icon-btn-md border" data-bs-toggle="modal" data-bs-target="#addWorkExperience">
                    <x-icon.edit />
                </button> --}}
                {{-- <button class="icon-btn icon-btn-md border" data-bs-toggle="modal" data-bs-target="#addEducation">
                    <x-icon.add />
                </button> --}}
                <button
                    type="button"
                    class="icon-btn icon-btn-md border"
                    wire:click="$dispatch('modal.open', { component: 'profile.biography.create'})"
                >
                    <x-icon.add />
                </button>
            </div>
            {{-- <div class="mb-2">
                <form action="">
                    <x-form.textarea label="" wire:model="bio" placeholder="Bio" />
                    <div>
                        <button class="btn btn-md px-5 btn-primary">Save</button>
                        <button class="btn btn-md px-5 btn-outline-gray">Cancel</button>
                    </div>
                </form>

            </div> --}}
            <div class="my-2">
                <p>{!! nl2br(e($biography)) !!}</p>
            </div>

        </div>

    </div>
</div>
