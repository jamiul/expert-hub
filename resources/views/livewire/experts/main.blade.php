@extends('frontend.layouts.front-layout')

@section('content')
    <div class="breadcrumb" x-data="mainExpertsStore">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="breadcrumb-left">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/frontend/img/breadcrumb-icon.png') }}"></img></a>
                            </li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Experts Database</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="breadcrumb-right">
                        <div style="position: relative">
                            <a class="data-icon"
                                x-on:click='handleShare("find_experts")'
                                {{-- :class="{ 'active': isShareArr.includes({{ $expert->id }}) }" --}} href="javascript:void(0)" wire:ignore>
                                <img src="{{ asset('assets/frontend/img/share-icon.png') }}" />
                            </a>
                            <div :class="{ 'activeShare': sharing === 'find_experts' }" class="modal-body box-share">
                                <ul class="share-links">
                                    <li>
                                        <a class="facebook"
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ route('find.experts') }}"
                                            target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="https://twitter.com/intent/tweet?&url={{ route('find.experts') }}"
                                            target="blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin"
                                            href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('find.experts') }}"
                                            target="blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="find-consultant databasepading">
        <div class="container">
            <div class="row">
                <livewire:experts.filter-experts />
                <livewire:experts.list-experts />
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('mainExpertsStore', () => ({
                sharing: '',
                handleShare(id) {
                    if (this.sharing === id) {
                        this.sharing = ''
                    } else {
                        this.sharing = id
                    }
                }
            }))
        })
    </script>
    
    @include('frontend.expert.partials._slider')
@endsection


@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/expert.js') }}"></script>
@endpush
