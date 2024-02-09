@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="h5">Select a billing method</h1>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>

                    @livewire('payment.card.lists')

                    <button type="button"
                            onclick="Livewire.dispatch('modal.open', { component: 'payment.card.add' })"
                            class="btn btn-outline-primary btn-has-icon btn-md border-2 mt-40">
                        <x-icon.add-circle fill="#0036E3"/>
                        <span class="btn-text">Add New Billing Method</span>
                    </button>
                </div>
                <div class="col-md-4">
                    @livewire('payment.pay')
                </div>
            </div>

        </div>
    </section>
@endsection
