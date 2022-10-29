@extends('layouts.app')
@section('content')
    <h1 class="d-flex justify-content-center">
        Laravel Payment Gateways
    </h1>
    <div class="row">
        <a href="{{route('stripe.init')}}"><button class="btn btn-primary">Stripe</button></a>
        <a href="{{route('paypal.index')}}"><button class="btn btn-primary">Paypal</button></a>
        <a href="{{route('razorpay.index')}}"><button class="btn btn-primary">RazorPay</button></a>
        <a href="{{route('payumoney.init')}}"><button class="btn btn-primary">PayUMoney</button></a>
        <a href="{{route('mollie.init')}}"><button class="btn btn-primary">Mollie</button></a>
        <a href="{{route('authorize.init')}}"><button class="btn btn-primary">Authorize</button></a>
        <a href="{{route('paystack.init')}}"><button class="btn btn-primary">PayStack</button></a>
        <a href="{{route('paytm.init')}}"><button class="btn btn-primary">Paytm</button></a>
    </div>
@endsection
