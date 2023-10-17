@extends('admin.layouts.app')
@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Training')}}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ url('/admin/training/create') }}" class="btn btn-circle btn-info">
                <span>{{translate('Add New Training')}}</span>
            </a>
        </div>
    </div>
</div>
<br>
<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Training posts') }}</h5>
            </div>


            <div class="col-md-2">
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($search) value="{{ $search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
                </div>
            </div>
        </div>
        </from>
        <div class="card-body">
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{translate('Title')}}</th>
                        {{-- <th data-breakpoints="lg">{{translate('Training Date')}}</th> --}}
                        <th data-breakpoints="lg">{{translate('Training Mode')}}</th>
                        <th data-breakpoints="lg">{{translate('Software Package')}}</th>
                        <th data-breakpoints="lg">{{translate('Language')}}</th>
                        <th data-breakpoints="lg">{{translate('Instructor')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainings as $key => $training)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $training->title }}
                        </td>
                        {{-- <td>
                            @dd($training->training_dates);
                            @php
                                $training->training_dates;
                            @endphp
                        </td> --}}
                        <td>
                            {{ getTrainingModeName($training->training_mode_id) }}
                        </td>
                        <td>
                            {{ getSoftwarePackageName($training->training_software_id) }}
                        </td>
                        <td>
                            {{ getLanguageName($training->language_id) }}
                        </td>
                        <td>
                            {{ getInstructorName($training->user_id) }}
                        </td>
                        <td>
                            {{ $training->status }}
                        </td>
                        <td class="text-right">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('training.edit',$training->id)}}" title="{{ translate('Edit') }}">
                                <i class="las la-pen"></i>
                            </a>

                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-toggle="modal" data-target="#delete-modal_{{$training->id}}" data-id={{$training->id}}>
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- delete Modal -->
                    <div id="delete-modal_{{$training->id}}" class="modal fade">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title h6">{{translate('Delete Confirmation')}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <p class="mt-1">{{translate('Are you sure to delete this?')}}</p>
                                    <form action="{{ route('training.delete', $training->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->
                    @endforeach
                </tbody>
            </table>

            {{-- @dd(route('training.delete', $training->id)); --}}
            <div class="aiz-pagination">
                {{-- {{ $scholarships->links() }} --}}
            </div>
        </div>
</div>

@endsection

@section('modal')
    {{-- @include('admin.partials.delete_modal') --}}
@endsection


@section('script')

    <script type="text/javascript">
        function changeStatus(el){
            var status = 0;
            if(el.checked){
                var status = 1;
            }
            $.post('{{ route('blog.change-status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Change blog status successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
        $(document).on('click','.confirm-delete',function(){
            let id = $(this).attr('data-id');
            $('#id').val(id);
        });
    </script>

@endsection