@php
    $fromEntry = ($paginator->currentPage() - 1) * $paginator->perPage() + 1;
    $toEntry = $paginator->perPage() * $paginator->currentPage();
    $toEntry = $toEntry < $paginator->total() ? $toEntry : $paginator->total();
@endphp

<div class="pagination">
    <div class="row">
        <div class="col-md-4">
            <div class="pagination-left">
                @lang('pagination.showing_from_to_of_entries', ['from' => $fromEntry, 'to' => $toEntry, 'total' => $paginator->total()])
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
                                <img src="{{ asset('assets/frontend/img/pagination-left.png') }}"></img>
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-left-hover.png') }}"></img>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#" wire:click="gotoPage(1, '{{ $paginator->getPageName() }}')">
                                <img src="{{ asset('assets/frontend/img/pagination-left.png') }}"></img>
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-left-hover.png') }}"></img>
                            </a>
                        </li>
                    @endif

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled">
                            <a href="javascript:void(0)">
                                <i class="fa fa-caret-left"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="prev">
                                <i class="fa fa-caret-left"></i>
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

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a href="#" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="disabled" aria-disabled="true">
                            <a href="javascript:void(0)">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Last Page Link --}}
                    @if ($paginator->lastPage() == $paginator->currentPage())
                        <li>
                            <a href="javascript:void(0)" class="disable">
                                <img src="{{ asset('assets/frontend/img/pagination-right.png') }}"></img>
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}"></img>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#" wire:click="gotoPage({{ $paginator->lastPage() }}, '{{ $paginator->getPageName() }}')">
                                <img src="{{ asset('assets/frontend/img/pagination-right.png') }}"></img>
                                <img class="hover-icon" src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}"></img>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>