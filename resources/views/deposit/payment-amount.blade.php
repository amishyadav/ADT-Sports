@extends('layouts.horizontal.app')
@section('title')
    {{__('messages.deposit.deposit')}}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">@yield('title')</h1>
            <div class="text-end mt-4 mt-md-0">
                <a href="{{ route('user.deposit-transaction.create')}}"
                   class="btn btn-outline-primary">{{ __('messages.common.back') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            {{ Form::open(['id'=>'addPaymentForm']) }}
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="text-danger">Min Deposit : {{$minAndMax['min_bet']}}</p>
                        <p class="text-danger">Max Deposit : {{$minAndMax['max_bet']}}</p>
                        <p class="text-danger">Tax : 18%</p>
                    </div>
                    <div class="col-6">
                        <div>
                            {{Form::hidden('payment_type', $id,['id' => 'paymentType'])}}
                            {{ Form::label('amount',__('Amount').(':'), ['class' => 'form-label']) }}
                            <span class="required"></span>
                            {{ Form::text('amount', null, ['id'=>'amount','class' => 'form-control','required','placeholder' => __('Amount')]) }}
                        </div>
                        <div>
                            {{ Form::label('totalAmount',__('Total Amount').(':'), ['class' => 'form-label']) }}
                            <span class="required"></span>
                            {{ Form::text('totalAmount', null, ['id'=>'totalAmount','disabled','class' => 'form-control','required','placeholder' => __('Total Amount')]) }}
                        </div>
                    </div>

                </div>

            </div>
            <div class="card-footer pt-0">
                {{ Form::submit(__('messages.deposit.deposit'), ['class' => 'btn btn-primary']) }}
            </div>
            {{Form::close()}}
        </div>
@endsection
