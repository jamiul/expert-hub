@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="" id="sort_experts" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{translate('Expert Lists')}}</h5>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type" onchange="sort_experts()">
                            <option value="">{{ translate('Sort by') }}</option>
                            <option value="created_at,asc" @isset($colName , $query) @if($colName == 'created_at' && $query == 'asc') selected @endif @endisset>{{translate('Time (Old > New)')}}</option>
                            <option value="created_at,desc" @isset($colName , $query) @if($colName == 'created_at' && $query == 'desc') selected @endif @endisset>{{translate('Time (New > Old)')}}</option>
                            <option value="balance,desc" @isset($colName , $query) @if($colName == 'balance' && $query == 'desc') selected @endif @endisset>{{translate('Balance (High > Low)')}}</option>
                            <option value="balance,asc" @isset($colName , $query) @if($colName == 'balance' && $query == 'asc') selected @endif @endisset>{{translate('Balance (Low > High)')}}</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search By Name" name="search" @isset($sortSearch) value="{{ $sortSearch }}" @endisset>
                            <div class="input-group-append">
                                <button class="btn btn-light" type="submit">
                                    <i class="las la-search la-rotate-270"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{translate('Name')}}</th>
                            <th data-breakpoints="md">{{translate('Email')}}</th>
                            <th data-breakpoints="md">{{translate('Package')}}</th>
                            <th data-breakpoints="md">{{translate('Verification Status')}}</th>
                            <th data-breakpoints="md">{{translate('Balance')}}</th>
                            <th class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($experts as $key => $expert)
                            <tr>
                                <td>{{ ($key+1) + ($experts->currentPage() - 1)*$experts->perPage() }}</td>
                                @if ($expert->user != null)
                                    <td>
                                        {{$expert->user->name}}
                                    </td>
                                    <td>
                                        {{$expert->user->email}}
                                    </td>
                                @else
                                    <td>
                                        {{translate('Not Found')}}
                                    </td>
                                    <td>
                                        {{translate('Not Found')}}
                                    </td>
                                @endif
                                <td>
                                    @if ($expert->user->userPackage != null && $expert->user->userPackage->package != null)
                                        {{$expert->user->userPackage->package->name}}
                                    @else
                                        {{translate('Package Removed')}}
                                    @endif
                                </td>
                                @php
                                    $verification = \App\Models\Verification::where('user_id', $expert->user_id)->first();
                                @endphp
                                <td>
                                    @if ($verification != null && $verification->verified != 0)
                                        <span class="badge badge-inline badge-success">{{ translate('Verified') }}</span>
                                    @elseif ($verification != null && $verification->verified == 0)
                                        <span class="badge badge-inline badge-primary">{{ translate('New Request') }}</span>
                                    @else
                                        <span class="badge badge-inline badge-danger">{{ translate('Not Recieved Yet') }}</span>
                                    @endif
                                </td>
                                <td>
                                    {{singlePrice($expert->balance)}}
                                </td>
                                <td class="text-right">
                                    @if ($expert->user != null)
                                         <a class="btn btn-soft-warning btn-icon btn-circle btn-sm btn icon" href="#" title="{{translate('Add Wallet Balance')}}" onclick="show_wallet_modal({{ $expert->user->id }})">
                                            <i class="las la-plus"></i>
                                        </a>

                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm btn icon" href="{{ route('expert_info_show', $expert->user->user_name) }}" title="{{translate('View Details')}}">
                                            <i class="las la-eye"></i>
                                        </a>
                                    @endif
                                    @if ($expert->user->banned)
                                        <a href="javascript:void(0)" class="btn btn-soft-success btn-icon btn-circle btn-sm confirm-alert" data-href="{{ route('user.ban', $expert->user->id) }}" data-target="#unban-modal" title="{{translate('Unban')}}">
                                            <i class="las la-ban"></i>
                                        </a>
                                    @else
                                        <a href="{{route('experts_clients.login', encrypt($expert->user->id))}}" class="btn btn-soft-success btn-icon btn-circle btn-sm" title="{{translate('Login as expert')}}">
                                            <i class="las la-sign-in-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-alert" data-href="{{ route('user.ban', $expert->user->id) }}" data-target="#ban-modal" title="{{translate('Ban')}}">
                                            <i class="las la-ban"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $experts->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.partials.ban_modal')
    @include('admin.partials.unban_modal')
    @include('admin.partials.wallet_recharge_admin')
@endsection
@section('script')
<script type="text/javascript">
    function sortExperts(el){
        $('#sort_experts').submit();
    }
    function showWalletModal(user_id){
        $('#wallet_user_id').val(user_id);
        $('#wallet_modal_admin').modal('show');
    }
</script>
@endsection
