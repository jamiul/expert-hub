@extends('admin.default.layouts.app')
@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Scholarship')}}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('scholarship.create') }}" class="btn btn-circle btn-info">
                <span>{{translate('Add New Scholarship')}}</span>
            </a>
        </div>
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Scholarship posts') }}</h5>
            </div>

            <div class="col-md-2">
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
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
                        <th data-breakpoints="lg">{{translate('Category')}}</th>
                        <th data-breakpoints="lg">{{translate('level')}}</th>
                        <th data-breakpoints="lg">{{translate('university')}}</th>
                        <th data-breakpoints="lg">{{translate('Short Description')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scholarships as $key => $scholarship)
                    <tr>
                        <td>
                            {{ ($key+1) + ($scholarships->currentPage() - 1) * $scholarships->perPage() }}
                        </td>
                        <td>
                            {{ $scholarship->title }}
                        </td>
                        <td>
                            @if($scholarship->category != null)
                                {{ $scholarship->category->category_name }}
                            @else
                                --
                            @endif
                        </td>
                        <td>
                            @if($scholarship->level != null)
                                {{ $scholarship->level->level_name }}
                            @else
                                --
                            @endif
                        </td>
                        <td>
                            @if($scholarship->university != null)
                                {{ $scholarship->university->university_name }}
                            @else
                                --
                            @endif
                        </td>
                        <td>
                            {{ $scholarship->short_description }}
                        </td>
                        <td>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" onchange="change_status(this)" value="{{ $scholarship->id }}" <?php if($scholarship->status == 1) echo "checked";?>>
                                <span></span>
                            </label>
                        </td>
                        <td class="text-right">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('scholarship.edit',$scholarship->id)}}" title="{{ translate('Edit') }}">
                                <i class="las la-pen"></i>
                            </a>

                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('scholarship.destroy', $scholarship->id)}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $scholarships->links() }}
            </div>
        </div>
</div>

@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection


@section('script')

    <script type="text/javascript">
        function change_status(el){
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
    </script>

@endsection
