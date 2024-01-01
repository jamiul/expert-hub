<div class="academic-seller-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="academic-bar d-flex">
                    <h3 class="seller-title">About area</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="admin-blog-form-area">
                    <div class="admin-form-content">
                        <form wire:submit="saveArea">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Subtitle" wire:model="area_subtitle"
                                            placeholder="Add Subtitle here" />
                                    </div>
                                    <div class="col admin-sub-title position-relative">
                                        <x-form.input type="text" label="Title" wire:model="area_title"
                                        placeholder="Add Title here" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating admin-text-area position-relative">
                                        <x-form.textarea label="Description" wire:model="area_description" placeholder="Description"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="edux-frontend-left-title ">
                                        <button type="submit" class="save-update">Save</button>
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
