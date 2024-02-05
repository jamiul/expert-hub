<div>
    @if($withdrawal_methods->count() > 0)
        @foreach($withdrawal_methods as $method)
            <div class="col-md-12">
                <div class="card-area d-flex justify-content-between align-content-center">
                    <div class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                        @if($method->is_default)
                            <div class="chard-check">
                                <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                            </div>
                        @endif

                        <div class="chard-number d-flex flex-column">
                            <h6>Personal Account</h6>
                            <p>card ends: ****{{ $method->last4 }} in {{ $method->currency }}</p>
                        </div>
                    </div>

                    <div class="card-option d-flex justify-content-md-end gap-4 align-items-center ">
                        <a href="#" class="card-edit"><span class="material-symbols-outlined">edit</span></a>
                        <a href="#" class="card-delete"><span class="material-symbols-outlined">delete</span></a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert edux-alert alert-danger" role="alert">
            <x-icon.info/>
            <strong>There is no withdrawal method added.</strong>
        </div>
    @endif
</div>
