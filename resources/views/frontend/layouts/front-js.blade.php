<script src="{{ asset('assets/frontend/js/jquery_3.7.1_jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/common/js/vendors.js') }}"></script>
<script src="{{ asset('assets/common/js/aiz-core.js') }}"></script>
<script src="{{ asset('assets/common/js/scripts-custom.js') }}"></script>

<script type="text/javascript">
    var AIZ = AIZ || {};
    AIZ.local = {
        nothing_selected: '{{ translate('Nothing selected') }}',
        nothing_found: '{{ translate('Nothing found') }}',
        choose_file: '{{ translate('Choose file') }}',
        file_selected: '{{ translate('File selected') }}',
        files_selected: '{{ translate('Files selected') }}',
        items_selected: '{{ translate('Items selected') }}',
        add_more_files: '{{ translate('Add more files') }}',
        adding_more_files: '{{ translate('Adding more files') }}',
        drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
        browse: '{{ translate('Browse') }}',
        upload_complete: '{{ translate('Upload complete') }}',
        upload_paused: '{{ translate('Upload paused') }}',
        resume_upload: '{{ translate('Resume upload') }}',
        pause_upload: '{{ translate('Pause upload') }}',
        retry_upload: '{{ translate('Retry upload') }}',
        cancel_upload: '{{ translate('Cancel upload') }}',
        uploading: '{{ translate('Uploading') }}',
        processing: '{{ translate('Processing') }}',
        complete: '{{ translate('Complete') }}',
        file: '{{ translate('File') }}',
        files: '{{ translate('Files') }}',
    }

    @foreach (session('flash_notification', collect())->toArray() as $message)
        AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
    @endforeach
</script>

@stack('bottom_scripts')
