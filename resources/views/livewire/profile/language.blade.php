<div class="progress-step-content ">
    <h5 class="mb-2">What languages do you speak?</h5>
    <p>We will use this to help match you with clients who are fluent in their language.</p>

    <div class="d-grid grid-cols-sm-6 gap-3">
        @foreach ($languages as $language)
        <div class="card">
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td>Language</td>
                        <td class="fw-medium">: {{ $language->name }}</td>
                    </tr>
                    <tr>
                        <td>Proficiency</td>
                        <td class="fw-medium">: {{ $language->pivot->proficiency }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="editLanguage({{ $language->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteLanguage({{ $language->id }})" class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                        data-bs-target="#deleteLanguage">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <button type="button" class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
            data-bs-target="#addLanguage">
        <x-icon.add/>
        <span>Add Language</span>
    </button>
    @script
    <script>
        $wire.on('languageAdded', (event) => {
            closeModal('addLanguage');
        });
        $wire.on('openEditLanguageModal', (event) => {
            openModal('editLanguage');
        });
        $wire.on('languageUpdated', (event) => {
            closeModal('editLanguage');
        });
        $wire.on('languageDeleted', (event) => {
            closeModal('deleteLanguage');
        });
    </script>
    @endscript
    <!-- Modal : Add Language-->
    <div wire:ignore.self class="modal fade" id="addLanguage" tabindex="-1" aria-labelledby="addLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <form wire:submit="addLanguage">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Add Language</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body px-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-form.select label="Language" name="language_id">
                                        <option value="">Select</option>
                                        @foreach ($availableLanguages as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>
                                <div class="col-md-6">
                                    <x-form.select label="Proficiency" name="proficiency">
                                        <option value="">Select</option>
                                        @foreach (App\Enums\LanguageProficiency::cases() as $proficiency)
                                            <option value="{{ $proficiency->value }}">{{ $proficiency->value }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal -->
    <!-- Modal : Edit Language-->
    <div wire:ignore.self class="modal fade" id="editLanguage" tabindex="-1" aria-labelledby="addLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <form wire:submit="updateLanguage">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Language</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body px-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-form.input type="text" readonly label="Language" name="" value="{{ $language?->name }}"/>
                                    <x-form.input type="hidden"  label="" name="language_id"/>
                                </div>
                                <div class="col-md-6">
                                    <x-form.select label="Proficiency" name="proficiency">
                                        <option value="">Select</option>
                                        @foreach (App\Enums\LanguageProficiency::cases() as $proficiency)
                                            <option value="{{ $proficiency->value }}">{{ $proficiency->value }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Language-->
    <div wire:ignore.self class="modal fade" id="deleteLanguage" tabindex="-1" aria-labelledby="deleteLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button wire:click="destroyLanguage" type="button" class="btn btn-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
</div>