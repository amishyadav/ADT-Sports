@extends('layouts.app')
@section('title')
    {{ __('messages.sms_template.sms_gateways') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">@yield('title')</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    @include('flash::message')
                    @include('layouts.errors')
                </div>
                {{ Form::open(['route' => 'sms.gateways.update', 'method' => 'post', 'id' => 'editSmsGatewaysForm', 'files' => 'true']) }}
                <div class="section-body">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 mb-5">
                                    {{ Form::label('sms_send_method',__('Sms Send Method').(':'), ['class' => 'form-label']) }}
                                    <span class="required"></span>
                                    {{ Form::select('sms_send_method',$smsSendMethod, $smsGatewaysData['sms_send_method'] ?? null, [
                                   'class' => 'form-select', 'aria-label'=>"Select a Method",
                                   'data-control'=>'select2','id' => 'sendSmsMethod']) }}
                                </div>
                                <div class="col-sm-6 mt-8 text-end">
                                    <button class="btn btn-primary sendTestSmsBtn" type="button">Send Test SMS</button>
                                </div>
                            </div>
                            <div class="nexmo d-none">
                                <div class="row">
                                    <h5>Nexmo Configuration</h5>
                                    <div class="col-sm-6 mb-5">
                                        {{ Form::label('nexmo_api_key',__('Api Key').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('nexmo_api_key',$smsGatewaysData['nexmo_api_key'] ?? null, ['class' => 'form-control','placeholder' => 'Api Key']) }}
                                    </div>
                                    <div class="col-sm-6 mb-5">
                                        {{ Form::label('nexmo_api_secret',__('Api Secret').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('nexmo_api_secret',$smsGatewaysData['nexmo_api_secret'] ?? null, ['class' => 'form-control','placeholder' => 'Api Secret']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="twilio d-none">
                                <div class="row">
                                    <h5>Twilio Configuration</h5>
                                    <div class="col-sm-4 mb-5">
                                        {{ Form::label('account_sid',__('Account SID').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('account_sid',$smsGatewaysData['account_sid'] ?? null, ['class' => 'form-control','placeholder' => 'Account SID']) }}
                                    </div>
                                    <div class="col-sm-4 mb-5">
                                        {{ Form::label('auth_token',__('Auth Token').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('auth_token',$smsGatewaysData['auth_token'] ?? null, ['class' => 'form-control','placeholder' => 'Auth Token']) }}
                                    </div>
                                    <div class="col-sm-4 mb-5">
                                        {{ Form::label('from_number',__('From Number').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('from_number',$smsGatewaysData['from_number'] ?? null, ['class' => 'form-control','placeholder' => 'From Number']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    @include('sms_templates.sms_gateways.send_test_message_model')
@endsection
