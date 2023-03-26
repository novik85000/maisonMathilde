@extends('layouts.app')
@section('title-block') Message @endsection


@section('content')

    <div class="alert alert-success">
        <h1> {{ $data-> subject }}</h1>
        <p> {{ $data-> email }} - {{ $data-> first_name }} {{ $data-> last_name }} </p>
        <p> Message: "{{ $data-> message }}"</p>
        <p><small> № {{ $data-> id }} {{ $data-> created_at }} </small>  </p>
        <a href="{{ url()->previous() }}"><button class="btn btn-warning">@lang('messages.back')</button></a>
        <a href="{{route('contact-delete', $data-> id)}}"><button class="btn btn-danger">@lang('messages.delete')</button></a>
    </div>
@endsection

