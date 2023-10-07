@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{translate('Cancellation Request Projects')}}</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{translate('Project')}}</th>
                                <th data-breakpoints="md">{{translate('Type')}}</th>
                                <th data-breakpoints="md">{{translate('Price')}}</th>
                                <th>{{translate('Request Sent By')}}</th>
                                <th data-breakpoints="md">{{translate('Status')}}</th>
                                <th class="text-right">{{translate('Options')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cancelProjects as $key => $cancelProject)
                                <tr>
                                    <td>{{ ($key+1) + ($cancelProjects->currentPage() - 1)*$cancelProjects->perPage() }}</td>
                                    @if ($cancelProject->project != null)
                                    <td>
                                        {{$cancelProject->project->name}}
                                    </td>
                                    <td>
                                        {{$cancelProject->project->type}}
                                    </td>
                                    <td>
                                        {{singlePrice($cancelProject->project->price)}}
                                    </td>
                                    @endif
                                    @if ($cancelProject->requested_user != null)
                                        <td>
                                            {{$cancelProject->requested_user->name}}
                                        </td>
                                    @endif
                                    @if ($cancelProject->project->cancel_by_user_id == null)
                                        <td>
                                            <span class="badge badge-inline badge-warning">{{ translate('Pending') }}</span>
                                        </td>
                                    @else
                                        <td>
                                            <span class="badge badge-inline badge-success">{{ translate('Cancelled') }}</span>
                                        </td>
                                    @endif
                                    <td class="text-right">
                                        <a href="javascript:void(0)" onclick="show_cancel_request_modal('{{ $cancelProject->id }}')" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="{{translate('Show')}}">
                                            <i class="las la-eye"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{ route('cancel-project-request.delete', $cancelProject->id) }}" title="{{translate('Delete')}}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $cancelProjects->appends(request()->input())->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('admin.partials.delete_modal')
    <div class="modal fade" id="cancel-project-request">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Cancel Request') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cancel-project-request_body">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    function showCancelRequestModal(id){
        $.post('{{ route('cancel-project-request.show') }}', { _token: '{{ csrf_token() }}', id:id }, function(data){
            $('#cancel-project-request').modal('show');
            $('#cancel-project-request_body').html(data);
        })
    }
    function sortCancelProjects(el){
        $('#sort_cancel_projects').submit();
    }
</script>
@endsection
