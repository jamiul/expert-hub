<section class="">
    <div class="container">
        <div class="row">
            <div class="col justify-content-center">
                <div class="card card-60-40 profile-setup-card my-60 mx-auto border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <h1 class="h4 text-left">Your Current Position</h1>
                            <p>
                                Scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was popularised in the 1960s with the release.
                            </p>
                        </div>
                        <form wire:submit="save">
                            <x-form.input type="text" wire:model.blur="current_role" label="Role" placeholder="Type Here"/>
                            <x-form.input type="text" wire:model.blur="current_organization" label="Organisation/Institution (Optional)" placeholder="Type Here"/>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-lg" type="submit">Save & Continue </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>