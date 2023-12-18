<div class="timeline-right">
    <div class="timeline-biography">
        <h3>Biography</h3>
        <p>Please provide a brief biography, limited to 300 words, which will be used in your public profile. Ensure that it conveys meaningful information you would like the client to know about you before engaging in your project</p>
    </div>
    <div class="timeline-form2">
        <div class="form-group">
            <textarea class="@error('biography') has-error @enderror" type="text" wire:model="biography" placeholder="e.g. Brief 300 words summary about your expertise."></textarea>
            @error('biography')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Research Profile (Optional)</label>
            <input type="text" placeholder="eg. https://example.com/john-doe" wire:model="research_profile_1">
        </div>
        <div class="form-group">
            <label>Research Profile (Optional)</label>
            <input type="text" placeholder="eg. https://example.com/john-doe" wire:model="research_profile_2">
        </div>
    </div>
    @include('livewire.profile.buttons')
</div>