@php
use App\Events;
@endphp
@section('title', 'RSVP')
@section('content')
    @extends('layouts.base')
    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
    </section>
            <form action="{{ url('/invitation/rsvp') }}" method="post">
                <div class="select">
                    <select>
                        @foreach (Events::all() as $event)
                      <option value="{{ $event->id }}">{{ $event->title }}</option>
                      @endforeach

                    </select>
                  </div>
            </form>
@endsection

