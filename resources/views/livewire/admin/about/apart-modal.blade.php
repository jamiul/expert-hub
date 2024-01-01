<div>
    <!--======================================= Insert Modal =================================-->
    <div wire:ignore.self class="modal fade" id="addApartDetails" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered add-step-modal">
            <div class="modal-content ">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body add-step-content">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add details insert</h1>
                    <form wire:submit.prevent="storeApartDetails">
                        <div class="my-2">
                            <x-form.input type="text" label="Title" wire:model="set_title"
                            placeholder="Add title here" />
                        </div>
                        <div class="mb-3">
                            <x-form.textarea label="Description" wire:model="description" placeholder="Description"/>
                        </div>
                        <div class="mb-3">
                            <x-form.select label="Title" wire:model="type">
                                <option selected>Select type</option>
                                <option value="{{ App\Enums\ProfileType::Client->value }}">Client</option>
                                <option value="{{ App\Enums\ProfileType::Expert->value }}">Expert</option>
                            </x-form.select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="iconFile">Add Icon</label>
                            <input type="file" class="form-control" id="iconFile" wire:model="icon">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            @if ($icon)
                                <img src="{{ $icon->temporaryUrl() }}">
                            @endif
                        </div>
                        <div class="modal-footer border-0 add-step-footer">
                            <button type="submit" class="btn btn-primary btn-search-academy">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--======================================= Update Modal About Apart =================================-->
    <div wire:ignore.self class="modal fade" id="updateApartDetails" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered add-step-modal">
            <div class="modal-content ">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body add-step-content">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update details</h1>
                    <form>
                        <div class="my-2">
                            <x-form.input type="text" label="Title" wire:model="set_title"
                            placeholder="Add title here" />
                        </div>
                        <div class="mb-3">
                            <x-form.textarea label="Description" wire:model="description" placeholder="Description"/>
                        </div>
                        <div class="mb-3">
                            <x-form.select label="Title" wire:model="type">
                                <option selected>Select type</option>
                                <option value="{{ App\Enums\ProfileType::Client->value }}">Client</option>
                                <option value="{{ App\Enums\ProfileType::Expert->value }}">Expert</option>
                            </x-form.select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="iconFile">Add Icon</label>
                            <input type="file" class="form-control" id="iconFile" wire:model="icon">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            @if ($icon)
                                <img src="{{ $icon->temporaryUrl() }}">
                            @endif
                        </div>
                        <div class="modal-footer border-0 add-step-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button wire:click.prevent="updateAboutApart()" class="btn btn-primary btn-search-academy"
                                data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Delete Student Modal -->
    <div wire:ignore.self class="modal fade" id="deleteApartModal" tabindex="-1"
        aria-labelledby="deleteStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteStudentModalLabel">Delete Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyApart">
                    <div class="modal-body">
                        <h4>Are you sure you want to delete this data ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes! Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
