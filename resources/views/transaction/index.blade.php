@extends('layouts.app')
@section('title')
    {{ __('messages.common.categories') }}
@endsection
@section('content')
    <div class="container-fluid">
        <livewire:transaction-table/>
    </div>
@endsection
