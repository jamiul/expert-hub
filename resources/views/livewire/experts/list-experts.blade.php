<div class="col-md-8" x-data="expertsStore" x-init="handleInit">
    @foreach ($experts as $expert)
        {{-- {{dd()}} --}}
        <div class="right-sidebar">
            <div class="right-database">
                <div class="database-block">
                    <div class="database-contant">
                        <div class="database-img">
                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}">
                        </div>
                        <div class="database-text">
                            <h4><a
                                    href="{{ route('find-experts.details', $expert->user_name) }}">{{ $expert->name }}</a>
                            </h4>
                            <span>{{ optional($expert->educationDetails)->degree }}</span>
                            <span>{{ optional($expert->educationDetails)->school_name }}</span>
                        </div>
                    </div>
                    <div class="database-right">
                        @auth
                            <a class="data-icon" x-on:click='handleFavorite({{ $expert->id }})'
                                :class="{ 'active': isFavoriteArr.includes({{ $expert->id }}) }"
                                href="javascript:void(0)">
                                <img src="{{ asset('assets/frontend/img/like-icon.png') }}" />
                            </a>
                        @endauth
                        <div style="position: relative">
                            <a class="data-icon"
                                x-on:click='handleShare({{ $expert->id }}, "{{ route('find-experts.details', $expert->user_name) }}")'
                                {{-- :class="{ 'active': isShareArr.includes({{ $expert->id }}) }" --}} href="javascript:void(0)" wire:ignore>
                                <img src="{{ asset('assets/frontend/img/share-icon.png') }}" />
                            </a>
                            <div 
                                :class="{ 'activeShare': sharing === {{ $expert->id }}}"
                                class="modal-body box-share">
                                <ul class="share-links">
                                    <li>
                                        <a class="facebook"
                                            :href="'https://www.facebook.com/sharer/sharer.php?u=' + url_share"
                                            target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" :href="'https://twitter.com/intent/tweet?&url=' + url_share"
                                            target="blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin"
                                            :href="'http://www.linkedin.com/shareArticle?mini=true&url= ' + url_share"
                                            target="blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="consultant-reviw">
                    <ul>
                        <li><strong>${{ $expert->profile->hourly_rate }}</strong> / hr</li>
                        <li>
                            @for ($i = 0; $i < $expert->profile->rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </li>
                    </ul>
                </div>

                <div class="database-p box-line-clamp">
                    <div :class="isShowMore === {{ $expert->id }} ? '' : 'line-clamp-3'">
                        <div>{{ $expert->profile->bio }}</div>
                    </div>
                    @if (strlen($expert->profile->bio) > 500)
                        <div class="box-more">
                            <span x-on:click="handleShowMore({{ $expert->id }})" class="more-btn"
                                style="margin-left: 10px"
                                x-text="isShowMore === {{ $expert->id }} ? 'less' : 'more'"></span></p>
                        </div>
                    @endif
                </div>
                <div class="projects-slider">
                    <div class="tag__list d-flex flex-wrap mt-3">
                        <a href="#" class="cons-vid fs-13 fw-medium rounded-pill"> <img
                                src="{{ asset('assets/frontend/img/offer-img.png') }}" />Offer Consultationss </a>
                        <a href="#" class="fs-13 fw-medium rounded-pill">Curriculum Development</a>
                        <a href="#" class="fs-13 fw-medium rounded-pill">Education Research</a>
                        <a href="#" class="fs-13 fw-medium rounded-pill">Research & Analysis</a>
                        <span class="collapse" id="contentTag1">
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                        </span>
                        <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse"
                            href="#contentTag1" aria-expanded="false" aria-controls="contentTag1">
                            <span class="count">+12 More</span>
                            <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="pagination">
        <div class="row">
            <div class="col-md-4">
                <div class="pagination-left">
                    Showing {{ max(1, 4 * ($page - 1) + 1) }} to {{ min(4 * $page, $totalExperts) }} of
                    {{ $totalExperts }} experts
                </div>
            </div>
            <div class="col-md-8">
                <div class="pagination-right">
                    <div class="results">
                        <p>Results per page</p>
                        <select>
                            @for ($i = 1; $i <= $totalPages; $i++)
                                <option x-on:click="handleChangePage({{ $i }})"
                                    value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <ul>
                        <li>
                            <button class="btn-pagination" x-on:click="handleChangePage(1)">
                                <img src="{{ asset('assets/frontend/img/pagination-left.png') }}">
                                <img class="hover-icon"
                                    src="{{ asset('assets/frontend/img/pagination-left-hover.png') }}" />
                            </button>
                        </li>
                        <li>
                            <button class="btn-pagination" x-on:click="handleChangePage(page - 1)"><i
                                    class="fa fa-caret-left"></i></button>
                        </li>
                        @for ($i = 1; $i <= $totalPages; $i++)
                            <li>
                                <button class="btn-pagination"
                                    :style="{ 'background-color': page === {{ $i }} ? 'blue' :
                                        'white', 'color': page === {{ $i }} ? 'white' : 'black' }"
                                    href="##" class="cursor-pointer"
                                    x-on:click="handleChangePage({{ $i }})">{{ $i }}
                                </button>
                            </li>
                        @endfor
                        <li>
                            <button class="btn-pagination" x-on:click="handleChangePage(page + 1)"><i
                                    class="fa fa-caret-right"></i></button>
                        </li>
                        <li>
                            <button class="btn-pagination" x-on:click="handleChangePage(totalPage)">
                                <img src="{{ asset('assets/frontend/img/pagination-right.png') }}" />
                                <img class="hover-icon"
                                    src="{{ asset('assets/frontend/img/pagination-right-hover.png') }}" />
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('expertsStore', () => ({
            page: 1,
            isShowMore: '',
            isFavoriteArr: [],
            isShareArr: [],
            url_share: '',
            sharing: '',
            dataFavorites: @json($favoriteExperts),
            totalPage: @json($totalPages),
            handleInit() {
                Array.from(this.dataFavorites).forEach(data => {
                    this.isFavoriteArr.push(Object.assign({}, data).favoriteable_id)
                })

                this.isFavoriteArr = Array.from(this.isFavoriteArr);
            },
            handleChangePage(page) {
                Livewire.dispatch('handleChangePageExperts', {
                    page: page
                })
                if (page > 0 && page <= this.totalPage) {
                    this.page = page
                }
            },
            handleShowMore(id) {
                if (this.isShowMore === id) {
                    this.isShowMore = ''
                } else {
                    this.isShowMore = id
                }
            },
            handleFavorite(id) {
                if (!this.isFavoriteArr.includes(id)) {
                    this.isFavoriteArr.push(id)
                } else {
                    this.isFavoriteArr = this.isFavoriteArr.filter(x => x !== id)
                }
                Livewire.dispatch('handleFavoriteExpert', {
                    data: {
                        favoriteable_id: id
                    },
                })
            },
            handleShare(id, url) {
                this.url_share = url
                if (this.sharing === id) {
                    this.sharing = ''
                } else {
                    this.sharing = id
                }
                //  if (!this.isShareArr.includes(id)) {
                //     this.isShareArr.push(id)
                //  } else {
                //     this.isShareArr = this.isShareArr.filter(x => x !== id)
                //  }
            }
        }))
    })
</script>
