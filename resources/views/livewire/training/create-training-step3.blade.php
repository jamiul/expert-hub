<div class="step step-2 mb-4">
    <div class="main-form position-relative">
        <x-form.countable-textarea max="2000" label="Teaching and learning Activities" wire:model="activities" placeholder="Activities">
            Write description
        </x-form.countable-textarea>
        <!-- <span class="edux-word-count">0/200</span> -->
    </div>
</div>

<div class="step step-2 mb-4">
    <div class="main-form position-relative">
        <x-form.countable-textarea max="2000" label="Learning Recourses" wire:model="resources" placeholder="Resources">
            Write description
        </x-form.countable-textarea>
        <!-- <span class="edux-word-count">0/200</span> -->
    </div>
</div>

<div class="step step-2 mb-4">
    <div class="main-form position-relative">
        <x-form.textarea label="Prescribed Textbook and Software" wire:model="prescribedMaterials" placeholder="Prescribed Materials">
            Write description
            </x-form.countable-textarea>
            <!-- <span class="edux-word-count">0/200</span> -->
    </div>
</div>

<div class="step step-2 mb-4">
    <div class="main-form position-relative">
        <x-form.countable-textarea max="2000" label="Recommended Reading" wire:model="recommendedReading" placeholder="Recommended Reading">
            Write description
            </x-form.textarea>
            <!-- <span class="edux-word-count">0/200</span> -->
    </div>
</div>