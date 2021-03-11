@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>@lang('cookie-preference::localizations.your_cookie_preferences')</h1>
            <form action="{{url()->route('cookie-preference.save')}}">
                @csrf()
                <label for="lcp-decline">@lang('cookie-preference::localizations.decline_label')</label>
                <input id="lcp-decline" type="radio" name="cookie-preference" value="0">

                <label for="lcp-accept">@lang('cookie-preference::localizations.accept_label')</label>
                <input id="lcp-accept" type="radio" name="cookie-preference" value="1">

                <input type="submit" value="@lang('cookie-preference::localizations.submit')">
            </form>
        </div>
    </div>
</div>

@endsection