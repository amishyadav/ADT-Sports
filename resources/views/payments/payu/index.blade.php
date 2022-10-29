@extends('layouts.app')
@section('content')
    <form action="{{ $action }}" method="POST" name="payuForm" id="payForm">
        @csrf
        <input type="hidden" name="key" value="{{ $MERCHANT_KEY }}"/>
        <input type="hidden" name="hash" value="{{ $hash }}"/>
        <input type="hidden" name="txnid" value="{{ $txnid }}"/>

        <input type="hidden" name="service_provider" value="payu_paisa"/>
        <input name="surl" type="hidden" value="{{ route('payumoney.success')}}"/>
        <input name="furl" type="hidden" value="{{ route('payumoney.failed')}}"/>
        <div class="card mb-0  p-sm-only-0 shadow-none">
            <div class="card-body  p-sm-only-1">
                <h6 class="">
                    Confirm your details and proceed for payment
                </h6>
                <div class="">
                    <p>
                        The payment method that we provide is to make it easier for you to
                        pay.
                    </p>
                    <div class="form-group mb-3">
                        <lable>Email : {Your Eamil Here}</lable>
                        <input name="email" type="hidden" value="email@gmail.com"/>
                    </div>
                    <div class="form-group mb-3">
                        <lable>First Name : {Name Here}</lable>
                        <input name="firstname" type="hidden"
                               value="First Name"/>
                    </div>
                    <div class="form-group mb-3">
                        <lable>Phone : {Phone}</lable>
                        <input name="phone" type="hidden" value="9099459394"/>

                    </div>
                    <div class="form-group mb-3" id="amountDiv">
                        <h6 class="font-weight-bold">
                            Amount: ₹100
                        </h6>
                        <input name="amount" type="hidden" value="100"/>
                    </div>
                </div>
                <input name="productinfo" type="hidden" value="Addtion Information Here"/>
            </div>
            @if(!$hash)
                <div class="card-footer p-sm-only-1">
                    <div class="col-md-11 col-12 mb-3 px-0" id="codeInputDiv">
                    </div>
                    <div>
                        <button type="submit" id="btnProcessPayment"
                                data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..."
                                class="btn btn-primary btn-icon  icon-left">
                            <i class="fas fa-credit-card"></i> Process
                            Payment
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        let hash = '{{ $hash }}';
        let inputCodeEle = 'input[name="code"]';
        let btnVerify = '#btnVerify';
        let btnRemoveCode = '#btnRemoveCode';
        let lastCode = $(inputCodeEle).val();
        $(window).ready(function () {
            submitPayuForm();
        });

        function submitPayuForm () {
            if (hash === '') {
                return;
            }
            let payuForm = document.forms.payuForm;
            payuForm.submit();
            alert('a');

        }

        $(document).on('submit', '#payForm', function (e) {
            alert('aa');
            e.preventDefault();
            $(this)[0].submit();
        });
    </script>
    
@endsection
