@extends('frontend.default.layouts.app')
@push('top_styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
@endpush
@section('content')
    <section class="py-4 py-lg-5">
		<div class="container">
			<div class="row mb-5">
               @section('content')
                    <div class="border-bottom">
                        <div class="container mt-4">
                            {{-- breadcrumb  --}}
                            @include('frontend.default.project-details.breadcrumb')
                        </div>
                    </div>
                    <section class="py-4 py-lg-5">
                        <div class="container">
                            <div class="mx-lg-5 mx-xl-5 mx-md-5 ">
                                <div class="row ">
                                    @include('frontend.default.project-details.left-side')
                                    @include('frontend.default.project-details.right-side')
                                </div>
                                
                            </div>
                          <div class="mx-4">
                            @include('frontend.default.project-details.projects')
                          </div>
                
                        </div>
                    </section>
                @endsection
                @section('script')
                    <script type="text/javascript">
                        function bid_modal(id) {
                            $.post('{{ route('get_bid_for_project_modal') }}', {
                                _token: '{{ csrf_token() }}',
                                id: id
                            }, function(data) {
                                $('#bid_for_project').modal('show');
                                $('#bid_for_modal_body').html(data);
                            })
                        }
                    </script>
                @endsection
                @section('modal')
                    <div class="modal fade" id="bid_for_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Bid For Project') }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body" id="bid_for_modal_body">
                
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.default.partials.bookmark_remove_modal')
                @endsection
                
				>
			</div>

		</div>
	</section>


@endsection
@section('script')
    <script type="text/javascript">
        function bid_modal(id){
            $.post('{{ route('get_bid_for_project_modal') }}', { _token: '{{ csrf_token() }}', id:id }, function(data){
                $('#bid_for_project').modal('show');
                $('#bid_for_modal_body').html(data);
            })
        }
    </script>
@endsection
@section('modal')
<div class="modal fade" id="bid_for_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ translate('Bid For Project') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="bid_for_modal_body">

            </div>
        </div>
    </div>
</div>
@include('frontend.default.partials.bookmark_remove_modal')
@endsection
