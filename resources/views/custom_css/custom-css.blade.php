@extends('layouts.app')
@section('title')
    Custom Css
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="card bl-5-primary">
                    <div class="card-body p-5">
                        <p class="font-weight-bold text-primary">From this page, you can add/update CSS for the user
                            interface. Changing content on this page required programming knowledge.</p>
                        <p class="font-weight-bold text-warning">Please do not change/edit/add anything without having
                            proper knowledge of it. Any mistake may lead to misbehaving of the system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 ">
                @include('layouts.errors')
                @include('flash::message')
            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header border-bottom border-secondary">
                        <h2>Write Custom CSS</h2>
                    </div>
                    <form action="{{ route('custom-css.update') }}" method="post" id="customCssForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group custom-css">
                                <textarea id="editor"
                                          name="css_content">{{ \file_get_contents(asset("assets/css/custom.css")) }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
