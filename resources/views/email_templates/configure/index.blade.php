@extends('layouts.app')
@section('title')
    {{ __('messages.email_template.email_configuration') }}
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
                {{ Form::open(['route' => 'email.configure.update', 'method' => 'post', 'id' => 'addEmailConfigureSettings']) }}
                <div class="section-body">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 mb-5">
                                    {{ Form::label('email_send_method',__('Email Send Method').(':'), ['class' => 'form-label']) }}
                                    <span class="required"></span>
                                    {{ Form::select('email_send_method', $emailSendMethod, $emailData['email_send_method'] ?? null, [
                                   'class' => 'form-select', 'aria-label'=>"Select a Method",
                                   'data-control'=>'select2','id' => 'sendEmailMethod']) }}
                                </div>
                                <div class="col-sm-6 mt-8 text-end">
                                   <button class="btn btn-primary">Send Test Mail</button>
                                </div>
                            </div>
                            <div class="mail-block">
                            <div class="smtp-block">
                                    <div class="row">
                                        <h5>SMTP Configuration</h5>
                                        <div class="col-sm-4 mb-5">
                                            {{ Form::label('smtp_host',__('Host').(':'), ['class' => 'form-label']) }}
                                            <span class="required"></span>
                                            {{ Form::text('smtp_host',$emailData['smtp_host'] ?? null, ['id'=>'editSmtpHost','class' => 'form-control','placeholder' => 'e.g. smtp.googlemail.com']) }}
                                        </div>
                                        <div class="col-sm-4 mb-5">
                                            {{ Form::label('smtp_port',__('Port').(':'), ['class' => 'form-label']) }}
                                            <span class="required"></span>
                                            {{ Form::text('smtp_port',$emailData['smtp_port'] ?? null, ['id'=>'editSmtpPort','class' => 'form-control','placeholder' => 'Available port']) }}
                                        </div>
                                        <div class="col-sm-4 mb-5">
                                            {{ Form::label('smtp_encryption',__('Encryption').(':'), ['class' => 'form-label']) }}
                                            {{ Form::select('smtp_encryption', $emailEncryption, $emailData['smtp_encryption'] ?? null, [
                                           'class' => 'form-select', 'aria-label'=>"Select a Encryption",
                                           'data-control'=>'select2']) }}
                                        </div>
                                        <div class="col-sm-6 mb-5">
                                            {{ Form::label('smtp_username',__('Username').(':'), ['class' => 'form-label']) }}
                                            <span class="required"></span>
                                            {{ Form::text('smtp_username',$emailData['smtp_username'] ?? null, ['id'=>'editSmtpUsername','class' => 'form-control','placeholder' => 'Normally your email address']) }}
                                        </div>
                                        <div class="col-sm-6 mb-5">
                                            {{ Form::label('smtp_password',__('Password').(':'), ['class' => 'form-label']) }}
                                            <span class="required"></span>
                                            {{ Form::text('smtp_password',$emailData['smtp_password'] ?? null, ['id'=>'editSmtpPassword','class' => 'form-control','placeholder' => 'Normally your email password']) }}
                                        </div>
                                    </div>
                                </div>
                            <div class="sendgrid-block">
                                <div class="row">
                                    <h5>SendGrid API Configuration</h5>
                                    <div class="col-sm-12 mb-5">
                                        {{ Form::label('sendgrid_key',__('App Key').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('sendgrid_key',$emailData['sendgrid_key'] ?? null, ['class' => 'form-control','placeholder' => 'SendGrid App key']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="mailjet-block">
                                <div class="row">
                                    <h5>Mailjet API Configuration</h5>
                                    <div class="col-sm-6 mb-5">
                                        {{ Form::label('mailjet_public_key',__('Api Public Key').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('mailjet_public_key',$emailData['mailjet_public_key'] ?? null, ['class' => 'form-control','placeholder' => 'Mailjet Api Public Key']) }}
                                    </div>
                                    <div class="col-sm-6 mb-5">
                                        {{ Form::label('mailjet_secret_key',__('Api Secret Key').(':'), ['class' => 'form-label']) }}
                                        <span class="required"></span>
                                        {{ Form::text('mailjet_secret_key',$emailData['mailjet_secret_key'] ?? null, ['class' => 'form-control','placeholder' => 'Mailjet Api Secret Key']) }}
                                    </div>
                                </div>
                            </div>
                            </div>
                                <div class="mt-10">
                                    {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
                                </div>
                          
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
