<x-modal.form action="inviteToProject">
    <x-slot name="title">Invite to Project</x-slot>
    <x-expert.mini-card :expert="$expert"/>
    <x-form.textarea label="Message" wire:model="message" placeholder="Message">
    </x-form.textarea>
    <x-form.choice wire:model="project_id" label="Chose a Job">
        @foreach ($projects as $project)
            <option style="width:100px;" value="{{ $project->id }}">{{ $project->title }}</option>
        @endforeach
    </x-form.choice>
    <p class="modal-form-instruction">Want to talk to Professor Mile Esther about your project? <a
            href="">Schedule a consultation</a></p>
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Send Invitation</button>
    </x-slot>
</x-modal.form>
