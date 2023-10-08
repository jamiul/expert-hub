@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Update Site Page') }}</h5>
                </div>
                <div class="card-body">
                    <form id="add_form" class="form-horizontal"
                          action="{{ route('page-optimization.update', $pageOptimization->id) }}"
                          method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Title') }}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $pageOptimization->title }}"
                                       id="title" name="title" class="form-control"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Keywords') }}
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $pageOptimization->keyword }}"
                                       id="keyword" name="keyword" class="form-control"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Page') }}
                            </label>
                            <div class="col-md-9">
                                <select class="form-control " name="page_id"
                                        data-live-search="true" title="{{ translate('Select Page') }}">
                                    @foreach ($sitepages as $sitepage)
                                        <option
                                            value="{{ $sitepage['id'] }}" {{ $sitepage['id'] == $pageOptimization->page_id ? 'selected' : '' }}>
                                            {{ $sitepage['title'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{ translate('Descrition') }}
                            </label>
                            <div class="col-md-9">

                                <textarea name="description" rows="5"
                                          class="form-control">{{ $pageOptimization->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ translate('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function makeSlug(val) {
            let str = val;
            let output = str.replace(/\s+/g, '-').toLowerCase();
            $('#slug').val(output);
        }

        // add date dyanamic
        let add_date = 0;
        $('#addDate').click(function () {
            ++add_date;
            $('#trainingDateTable').append(
                '<tr><td><div class="form-group row"><label class="col-md-3 col-form-label">Training Date</label><div class="col-md-8"><input type="date" placeholder="Select Date" name="training_date[]" class="form-control"></div><div class="col-md"> <button type="button" class="btn btn-circle btn-danger" id="removeDate">X</button></div></div><div class="form-group row"><label class="col-md-3 col-form-label">Training Date Description</label><div class="col-md-9"><textarea name="date_description[]" rows="5"class="form-control"></textarea></div></div></td></tr>'
            );
        });

        $(document).on('click', '#removeDate', function () {
            console.log('remove');
            $(this).parents('tr').remove();
        });
    </script>
@endsection
