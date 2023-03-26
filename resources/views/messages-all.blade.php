@extends('layouts.app')

@section('content')
    @if($data_no_read-> count() > 0)
        <h1>@lang('messages.messages_no_read')</h1>
        @foreach($data_no_read as $el)
            <div class="alert alert-success">
                <h3> {{ $el-> subject }} </h3>
                <p> {{ $el-> email }} </p>
                <p><small> {{ $el-> created_at }} </small>  </p>
                <a href="{{route('contact-data-one', $el-> id)}}">
                    <button class="btn btn-success">
                        @lang('messages.details')</button>
                </a>
                <a href="{{route('contact-delete', $el-> id)}}">
                    <button class="btn btn-danger">
                        @lang('messages.delete')
                    </button>
                </a>
            </div>
        @endforeach
    @endif

    @if($data_read-> count() > 0)
        <h1>@lang('messages.messages_read')</h1>
        @foreach($data_read as $el)
            <div class="alert background_theme">
                <h3> {{ $el-> subject }} </h3>
                <p> {{ $el-> email }} </p>
                <p><small> {{ $el-> created_at }} </small>  </p>
                <a href="{{route('contact-data-one', $el-> id)}}">
                    <button class="btn background_theme">
                        @lang('messages.details')
                    </button>
                </a>
                <a href="{{route('contact-delete', $el-> id)}}">
                    <button class="btn btn-danger">
                        @lang('messages.delete')
                    </button>
                </a>
            </div>
        @endforeach
    @endif
@endsection

