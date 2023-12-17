
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
{{-- {{ dd($paginator) }} --}}
<div class="pagination">
    <div class="row">
        <div class="col-md-4">
            <div class="pagination-left">
                Showing {{ max(1, 4 * ($paginator->currentPage() - 1) + 1) }} to {{ min(4 * $paginator->currentPage(), $paginator->total()) }} of
                    {{ $paginator->total() }} experts
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
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/frontend/img/pagination-left.png') }}">
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-left-hover.png') }}">
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="" wire:click="gotoPage(1, '{{ $paginator->getPageName() }}')">
                                <img src="{{ asset('assets/frontend/img/pagination-left.png') }}">
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-left-hover.png') }}">
                            </a>
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
                                    <li wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page">
                                        <a href="javascript:void(0)" class="active">{{ $page }}</a>
                                    </li>
                                @else
                                    <li wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                        <a href="#" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Last Page Link --}}
                    @if ($paginator->hasMorePages())
                    <li>
                        <a href="javascript:void(0)" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')" >
                            <img src="{{ asset('assets/frontend/img/pagination-right.png') }}">
                            <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}">
                        </a>
                    </li>
                    @else
                        <li>
                            <a href="javascript:void(0)" class="disable">
                                <img src="{{ asset('assets/frontend/img/pagination-right.png') }}">
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}">
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>