<x-modal.form action="confirm">
    <x-slot name="title">{{ $prompt['title'] }}</x-slot>
    <p>{{ $prompt['message'] }}</p>
    @if($tableData)
        <table class="table border-top mb-0">
            <thead>
            <tr>
                @foreach($tableHeaders as $header)
                    <th scope="col" class="px-3 bg-light">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($tableData as $columns)
                <tr>
                    @foreach($columns as $column)
                        <td class="px-3">
                            {{ $column }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    @if($confirmPhrase)
        <div class="px-3 py-3">
            <input class="form-control" type="text" wire:model.defer="confirmPhraseInput" placeholder="{{ __("wire-elements-pro::modal.confirmation.please_enter_phrase_to_continue", ['phrase' => $confirmPhrase]) }}" required>

            @error('confirmPhraseInput')
            <div class="mt-2 text-danger">{{ $message }}</div>
            @enderror
        </div>
    @endif
    <x-slot name="button">
        <button type="submit" class="btn btn-danger">{{ $prompt['confirm'] }}</button>
    </x-slot>
</x-modal.form>