<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-3">
                <h1 class="h5 m-0">All Contract</h1>
            </div>
            <div class="title-page-body project-tab" x-data="{ activeTab: 'in-progress-contract' }">
                <div class="tab-nav">
                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'in-progress-contract' }"
                            @click="activeTab = 'in-progress-contract'">In progress ({{ $contracts->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'dispute-contract' }"
                            @click="activeTab = 'dispute-contract'">Dispute ({{ $disputedContracts->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'on-hold-contract' }"
                            @click="activeTab = 'on-hold-contract'">On hold (34)
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'cancel-contract' }"
                            @click="activeTab = 'cancel-contract'">Cancel (34)
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'completed-contract' }"
                            @click="activeTab = 'completed-contract'">Completed ({{ $endedContracts->count() }})
                    </button>

                </div>
                <div class="tab-content pt-40">
                    <div x-show="activeTab === 'in-progress-contract'" id="in-progress-tab-content">
                        <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                            <x-form.select class="input-field-md" wire:model="title">
                                <option value="Mr">All</option>
                                <option value="Mrs">Hourly Contract</option>
                                <option value="Mrs">Fixed Contract</option>
                            </x-form.select>
                            <x-form.flatpicker class="input-field-md" name="datepicker"/>

                            <div class="input-group">
                                <input type="text" class="input-field-control input-field-control-md"
                                        placeholder="Search by contract, client, or company">
                                <button class="btn btn-primary">
                                    <x-icon.search/>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">
                                @foreach ($contracts as $contract)
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">{{ $contract->project->title }}</p>
                                            <p class="mb-1">From: {{ $contract->created_at->format('M y') }} to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">{{ $contract->project->type }}: ${{ $contract->amount }}</p>
                                            <p class="mb-1">Escrow: ${{ $contract->escrow_amount }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img class="rounded-circle" style="width: 40px"
                                                            src="{{ $contract->expert->picture }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">{{ $contract->expert->user->full_name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu z-3">
                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">
                                                            Message Expert
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" wire:click="$dispatch('modal.open', { component: 'contract.client.submit-dispute', arguments: { contract: {{ $contract->id }} }})">Dispute</button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"  href="#">Contact Support</a>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" wire:click="$dispatch('modal.open', { component: 'contract.client.end', arguments: { contract: {{ $contract->id }} }})">End Contact</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="text-center py-40">
                            Pagination here
                        </div>
                    </div>
                    <div x-show="activeTab === 'dispute-contract'" id="dispute-tab-content">
                        <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                            <x-form.select class="input-field-md" wire:model="title">
                                <option value="Mr">All</option>
                                <option value="Mrs">Hourly Contract</option>
                                <option value="Mrs">Fixed Contract</option>
                            </x-form.select>
                            <x-form.flatpicker class="input-field-md" name="datepicker"/>

                            <div class="input-group">
                                <input type="text" class="input-field-control input-field-control-md"
                                        placeholder="Search by contract, client, or company">
                                <button class="btn btn-primary">
                                    <x-icon.search/>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">
                                @foreach ($disputedContracts as $contract)
                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656 </p>
                                        <p class="mb-1 fw-medium">{{ $contract->project->title }}</p>
                                        <p class="mb-1">From: {{ $contract->created_at->format('M y') }} to Present</p>

                                    </td>
                                    <td>
                                        <p class="mb-1">{{ $contract->project->type }}: ${{ $contract->amount }}</p>
                                        <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                            dispute
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ $contract->expert->picture }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">{{ $contract->expert->user->full_name }}</p>
                                                <p class=" mb-0">{{ $contract->expert->expertField->name }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="icon-btn border" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                <x-icon.three-dots/>
                                            </button>
                                            <ul class="dropdown-menu">
                                                {{-- <li>
                                                    <a class="dropdown-item"
                                                        href="/figma/project/view-expert-work-dairy">
                                                        View Work Dairy</a>
                                                </li> --}}
                                                <li>
                                                    <a class="dropdown-item" href="#">Message
                                                        Expert</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Contact Support</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="text-center py-40">
                            Pagination here
                        </div>
                    </div>
                    <div x-show="activeTab === 'on-hold-contract'" id="on-hold-tab-content">
                        <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                            <x-form.select class="input-field-md" wire:model="title">
                                <option value="Mr">All</option>
                                <option value="Mrs">Hourly Contract</option>
                                <option value="Mrs">Fixed Contract</option>
                            </x-form.select>
                            <x-form.flatpicker class="input-field-md" name="datepicker"/>

                            <div class="input-group">
                                <input type="text" class="input-field-control input-field-control-md"
                                        placeholder="Search by contract, client, or company">
                                <button class="btn btn-primary">
                                    <x-icon.search/>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">

                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656</p>
                                        <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                        <p class="mb-1">From: Sep 23 to Present</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                        <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>
                                        <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                            on-hold
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                    Riyadh </p>
                                                <p class=" mb-0">Public Health </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="icon-btn border" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                <x-icon.three-dots/>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/figma/project/view-expert-work-dairy">
                                                        View Work Dairy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                        Client</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Contact Support</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656 </p>
                                        <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                            Chemical
                                            Engineering Industry</p>
                                        <p class="mb-1">From: Sep 23 to Present</p>

                                    </td>
                                    <td>
                                        <p class="mb-1">Fixed: $1000.00</p>
                                        <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                            on-hold
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ asset('assets/frontend/img/consultant3.png') }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                    Riyadh </p>
                                                <p class=" mb-0">Public Health </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="icon-btn border" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                <x-icon.three-dots/>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/figma/project/view-expert-work-dairy">
                                                        View Work Dairy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                        Client</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Contact Support</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>

                        <div class="text-center py-40">
                            Pagination here
                        </div>
                    </div>
                    <div x-show="activeTab === 'cancel-contract'" id="cancel-tab-content">
                        <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                            <x-form.select class="input-field-md" wire:model="title">
                                <option value="Mr">All</option>
                                <option value="Mrs">Hourly Contract</option>
                                <option value="Mrs">Fixed Contract</option>
                            </x-form.select>
                            <x-form.flatpicker class="input-field-md" name="datepicker"/>

                            <div class="input-group">
                                <input type="text" class="input-field-control input-field-control-md"
                                        placeholder="Search by contract, client, or company">
                                <button class="btn btn-primary">
                                    <x-icon.search/>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">

                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656</p>
                                        <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                        <p class="mb-1">From: Sep 23 to Present</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                        <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>
                                        <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                            cancel
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                    Riyadh </p>
                                                <p class=" mb-0">Public Health </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656 </p>
                                        <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                            Chemical
                                            Engineering Industry</p>
                                        <p class="mb-1">From: Sep 23 to Present</p>

                                    </td>
                                    <td>
                                        <p class="mb-1">Fixed: $1000.00</p>
                                        <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                            cancel
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ asset('assets/frontend/img/consultant3.png') }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                    Riyadh </p>
                                                <p class=" mb-0">Public Health </p>
                                            </div>
                                        </div>
                                    </td>


                                </tr>

                            </table>
                        </div>

                        <div class="text-center py-40">
                            Pagination here
                        </div>
                    </div>
                    <div x-show="activeTab === 'completed-contract'" id="completed-tab-content">
                        <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                            <x-form.select class="input-field-md" wire:model="title">
                                <option value="Mr">All</option>
                                <option value="Mrs">Hourly Contract</option>
                                <option value="Mrs">Fixed Contract</option>
                            </x-form.select>
                            <x-form.flatpicker class="input-field-md" name="datepicker"/>

                            <div class="input-group">
                                <input type="text" class="input-field-control input-field-control-md"
                                        placeholder="Search by contract, client, or company">
                                <button class="btn btn-primary">
                                    <x-icon.search/>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">
                                @foreach ($endedContracts as $contract)
                                <tr class="align-middle" wire:key="{{ $contract->id }}">
                                    <td>
                                        <p class="mb-1">ID: 7557uy8675656</p>
                                        <p class="mb-1 fw-medium">{{ $contract->project->title }}</p>
                                        <p class="mb-1">From: {{ $contract->created_at->format('M y') }} to {{ $contract->updated_at->format('M y') }}</p>
                                    </td>
                                    <td>
                                        <button
                                            class="p-1 btn btn-link border-bottom-primary d-flex align-middle gap-2 rounded-0">
                                            <x-icon.comment-fill width="20" height="20" fill="#0036E3"/>
                                            Comment & rating
                                        </button>
                                    </td>
                                    <td>
                                        <p class="mb-1 fw-medium">{{ $contract->project->type }}: {{ $contract->amount }}</p>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3 align-item-center">
                                            <div class="expert-thumb">
                                                <img style="width: 40px"
                                                        src="{{ $contract->expert->picture }}"/>
                                            </div>
                                            <div class="expert-info">
                                                <p class="fw-medium project-expert-name mb-0">{{ $contract->expert->user->full_name }}</p>
                                                <p class="mb-0">{{ $contract->expert->expertField->name }}</p>
                                                <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="text-center py-40">
                            Pagination here
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
