@extends('layouts.app')

@section('content')


<form action="{{route('contacts-form')}}" method="post" style="width: 30vw; min-width: 500px">
    @csrf
    <div class="col">
        <div class="row">
            <label for="first_name" class="form-label">@lang('contacts.first_name')</label>
            <input type="text" class="form-control" name="first_name" required maxlength="30">
        </div>

        <div class="row">
            <label for="last_name" class="form-label">@lang('contacts.last_name')</label>
            <input type="text" class="form-control"  name="last_name" required maxlength="50">
        </div>


        <div class="row">
            <label for="email" class="form-label">@lang('contacts.email')</span></label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" maxlength="50">
        </div>

        <div class="row">
            <label for="subject" class="form-label">@lang('contacts.subject') </label>
            <input type="text" class="form-control" name="subject" required maxlength="150">
        </div>

        <div class="row">
            <label for="message" class="form-label">@lang('contacts.message') </label>
            <textarea class="form-control" name="message" cols="30" rows="10" required maxlength="5000"> </textarea>
        </div>

        <div class="row">
        {!! NoCaptcha::display() !!}
        </div>

            <button class="w-100 btn btn-primary btn-lg" type="submit">@lang('contacts.send')</button>
        </div>
</form>

@endsection

{!! NoCaptcha::renderJS() !!}

<script>
    window.onload = function() {
        var $recaptcha = document.querySelector('#g-recaptcha-response');
        if($recaptcha) {
            $recaptcha.setAttribute("required", "true");
        }
    };

</script>

