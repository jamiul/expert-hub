@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp
<div>
    @if ($paginator->hasPages())
        <div class="pagination">
            <div class="row">
                <div class="col-md-4">
                    <div class="pagination-left">
                        Showing {{ max(1, 4 * ($paginator->currentPage() - 1) + 1) }} to {{ min(4 * $paginator->currentPage(), $paginator->total()) }} of
                            {{ $paginator->total() }} results
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="pagination-right">
                        <div class="results">
                            <p>{{ 'Results per page' }}</p>
                            <select class="select-page" wire:change="gotoPage($event.target.value, '{{ $paginator->getPageName() }}')">
                                @foreach ($elements as $element)
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            <option value="{{ $page }}" {{ $page == $paginator->currentPage() ? 'selected' : '' }}>{{ $page }}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <ul>
                            {{-- First Page Link --}}
                            @if ($paginator->onFirstPage())
                                <li>
                                    <x-icon.skip-previous/>
                                </li>
                                <li>
                                    <x-icon.arrow-left/>
                                </li>
                            @else
                                <li wire:click="gotoPage(1, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
                                    <x-icon.skip-previous/>
                                </li>
                                <li wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                                    <x-icon.arrow-left/>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <li class="active" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page">
                                                {{ $page }}
                                            </li>
                                        @else
                                            <li wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
                                                {{ $page }}
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Last Page Link --}}
                            @if ($paginator->hasMorePages())
                                <li wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">
                                    <x-icon.arrow-right/>
                                </li>
                                <li wire:click="gotoPage({{ $paginator->lastPage() }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
                                    <x-icon.skip-next/>
                                </li>
                            @else
                                <li>
                                    <x-icon.arrow-right/>
                                </li>
                                <li>
                                    <x-icon.skip-next/>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
