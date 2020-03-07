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
            {{-- <nav class="level">
                <div class="level-left">
                    <div class="container">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">
                                    Upcoming events
                                </p>
                                <div class="table-container">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Created By</th>
                                            <th>RSVP</th>
                                        </tr>
                                        @foreach (Events::all() as $event)
                                        <tr>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->date }}</td>
                                        <td>{{ $event->address }}</td>
                                        <td>{{ $event->creator }}</td>
                                        <td><div class="select">
                                            <select>
                                              <option>No</option>
                                              <option>Yes</option>
                                            </select>
                                          </div></td>
                                        </tr>
                                             @endforeach

                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav> --}}
        <img style="bottom: -20px;position: absolute; " src="{{ asset('img/svg_wave.svg') }}" alt="">

    </section>

@endsection


