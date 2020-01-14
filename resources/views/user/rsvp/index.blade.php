@php
use App\Events;
@endphp
@section('title', 'RSVP')
@section('content')
    @extends('layouts.base')
    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
    </section>
    <form action="{{ url('/rsvp/accept') }}" method="post">
        @csrf
        <div class="container">
            <div class="columns">
                <div class="column is-4 is-offset-4">
                <div class="field">
                        <label class="label">Event</label>
                        <div class="control">
                            <div class="select">
                                <select name="rsvp">
                                    @foreach (Events::all() as $event)
                                    <option name="event{{ $event->id }}">ID: ({{ $event->id }}) {{ $event->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="First name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" name="username" placeholder="Text input" value="{{ Auth::user()->username }}#{{ Auth::user()->discrim }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">RSVP</label>
                        <div class="control">
                            <div class="select">
                                <select name="rsvp">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection


{{-- <div class="select">
        <select>
            @foreach (Events::all() as $event)
          <option value="{{ $event->id }}">{{ $event->title }}</option>
          @endforeach
        </select>
      </div> --}}
