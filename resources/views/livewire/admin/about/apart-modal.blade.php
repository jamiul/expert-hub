<div>
<!--======================================= Insert Modal =================================-->
<div class="modal fade" id="addApartDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered add-step-modal">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body add-step-content">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add details insert</h1>
                <form wire:submit.prevent="storeApartDetails">
                    <div class="my-2">
                        <input type="text" class="form-control academic-title" id="recipient-name"
                            placeholder="title" wire:model="set_title">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control academic-text" id="message-text" placeholder="Add description" wire:model="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" wire:model="type">
                            <option selected>Select type</option>
                            <option value="client">Client</option>
                            <option value="expert">Expert</option>
                        </select>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <label class="input-group-text" for="iconFile">Add Icon</label>
                        <input type="file" class="form-control" id="iconFile" wire:model="icon">
                    </div> --}}
                    <div class="modal-footer border-0 add-step-footer">
                        <button type="submit" class="btn btn-primary btn-search-academy">Add</button>
                    </div>
                </form>

            </div>
            {{-- <div class="modal-footer border-0 add-step-footer"> <button type="button"
                class="btn btn-primary btn-search-academy">Add</button> </div> --}}
        </div>
    </div>
</div>
<!--======================================= Update Modal About Apart =================================-->
<div class="modal fade" id="updateApartDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered add-step-modal">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body add-step-content">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update details</h1>
                <form>
                    <div class="my-2">
                        <input type="text" class="form-control academic-title" id="recipient-name"
                            placeholder="title" wire:model="set_title">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control academic-text" id="message-text" placeholder="Add description" wire:model="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" wire:model="type">
                            <option selected>Select type</option>
                            <option value="client">Client</option>
                            <option value="expert">Expert</option>
                        </select>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <label class="input-group-text" for="iconFile">Add Icon</label>
                        <input type="file" class="form-control" id="iconFile" wire:model="icon">
                    </div> --}}
                    <div class="modal-footer border-0 add-step-footer">
                        <button wire:click.prevent="updateAboutApart()" class="btn btn-primary btn-search-academy">Add</button>
                    </div>
                </form>

            </div>
            {{-- <div class="modal-footer border-0 add-step-footer"> <button type="button"
                class="btn btn-primary btn-search-academy">Add</button> </div> --}}
        </div>
    </div>
</div>
<!-- Delete Student Modal -->
<div wire:ignore.self class="modal fade" id="deleteApartModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel"
    aria-hidden="true">
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
