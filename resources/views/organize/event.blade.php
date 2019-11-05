@section('title', 'New Event')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
                <form action="{{ url('/organize/new/event') }}" method="post">
                    @csrf
                    <form action="/organize/new/event">

                    <label class="label">Event Information</label>
                    <div class="field is-grouped">
                        <div class="control is-expanded">
                            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Event Information">
                            @if ($errors->has('title'))
                                <p class="help has-text-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                        <div class="field is-grouped">
                            <div class="control is-expanded">
                                <input class="input {{ $errors->has('location') ? 'is-danger' : '' }}" type="text" name="location" placeholder="Event Information">
                                @if ($errors->has('location'))
                                    <p class="help has-text-danger">{{ $errors->first('location') }}</p>
                                @endif
                            </div>
                        </div>

                        <input type="date" name="date">

                        {{--                    <div class="field is-grouped">--}}
{{--                        <div class="control is-expanded">--}}
{{--                                <label>--}}
{{--                                    Enter the event date:--}}
{{--                                    <input type="date" name="date">--}}
{{--                                </label>--}}

                                <p><button>Submit</button></p>
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="field">
                        <div class="control">
                            <div class="content">
                                <textarea name="content" id="glEditor" class="textarea {{ $errors->has('content') ? 'is-danger' : '' }}"></textarea>
                            </div>
                            @if ($errors->has('content'))
                                <p class="help has-text-danger">{{ $errors->first('content') }}</p>
                            @endif
                        </div>
                    </div>

                     submit
                    <div class="field">
                        <button class="button is-primary is-rounded has-icon">
                            <span class="icon">
                                <i class="fas fa-check-circle fa-fw"></i>
                            </span>
                            <span>Add Event</span>
                        </button>
                    </div>

                </form>

    </section>

@endsection

