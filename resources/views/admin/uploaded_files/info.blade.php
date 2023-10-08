<div >
	<div class="form-group">
		<label>{{ translate('File Name') }}</label>
		<input type="text" class="form-control" value="{{ $file->file_name }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('File Type') }}</label>
		<input type="text" class="form-control" value="{{ $file->type }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('File Size') }}</label>
		<input type="text" class="form-control" value="{{ formatBytes($file->file_size) }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('Uploaded By') }}</label>
		<input type="text" class="form-control" value="{{ $file->user->name }}" disabled>
	</div>
	<div class="form-group">
		<label>{{ translate('Uploaded At') }}</label>
		<input type="text" class="form-control" value="{{ $file->created_at }}" disabled>
	</div>
	<div class="form-group text-center">
		@php
			if($file->file_original_name == null){
			    $fileName = translate('Unknown');
			}else{
				$fileName = $file->file_original_name;
			}
		@endphp
		<a class="btn btn-secondary" href="{{ asset($file->file_name) }}" target="_blank" download="{{ $fileName }}.{{ $file->extension }}">{{ translate('Download') }}</a>
	</div>
</div>
