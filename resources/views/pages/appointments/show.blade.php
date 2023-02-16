@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card mt-10">
        <div class="card-body">
            <form action="{{route('panel.appointments.charge', $appointment)}}" id="paymentForm" method="POST">
                @csrf
                <input type="hidden" id="payment_method" name="payment_method"/>
                <div id="card-element" class="my-4"></div>
                <button type="submit" id="paymentButton" class="btn btn-primary rounded-pill">
                    Payer {{$appointment->due_amount}} cts
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="https://js.stripe.com/v3"></script>
    <script>
        const stripe = new Stripe('{{config('cashier.key')}}');
        const elements = stripe.elements();
        const cardElement = elements.create('card', {});
        cardElement.mount('#card-element');
        const button = document.querySelector('#paymentButton');

        button.addEventListener('click', async (e) => {
            e.preventDefault();
            const {paymentMethod, error} = await stripe.createPaymentMethod('card', cardElement)

            if (error) {
                console.log(error);
            } else {
                document.querySelector('#payment_method').value = paymentMethod.id;
                document.querySelector('#paymentForm').submit();
            }

        })
    </script>
@endpush
