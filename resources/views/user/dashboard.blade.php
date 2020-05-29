@php
    use App\Events;
@endphp

@section('title', 'Dashboard')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary bg">
        <div class="hero-head">@include ('layouts.nav')</div>

        <div class="container" style="z-index: 10;">
            <div class="columns is-multiline is-centered">
            @foreach (Events::all() as $event)
              <div class="column">
            <div class="box is-parent" style="max-width: 500px; min-height: 400px;">
                  <div class="content has-text-centered" style="white-space: inherit;
                  word-break: break-word;">
                    <p class="title" style="padding: 10px;">{{ $event->title }}</p>
                    <p class="subtitle" style="padding: 10px;">{{ $event->date }}</p>
                    <div class="content">
                      <p>{{ $event->address }}</p>
                      <small><p>Created by: {{ $event->creator }}</p></small>
                        <br />
                      <button class="button is-large is-primary is-outlined">More Info</button>
                    </div>
                  </div>
              </div>
            </div>
              @endforeach
            </div>
        </div>
        <img style="bottom: -20px;position: absolute; " src="{{ asset('img/svg_wave.svg') }}" alt="">

    </section>

@endsection


