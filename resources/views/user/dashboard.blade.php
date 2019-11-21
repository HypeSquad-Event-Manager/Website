@php
    use App\Events;
@endphp

@section('title', 'Dashboard')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>

        <div class="container">
            <nav class="level">
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
                                            <th>RSVP</th>
                                        </tr>
                                        @foreach (Events::all() as $event)
                                        <tr>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->date }}</td>
                                        <td>{{ $event->address }}</td>
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
            </nav>
        </div>

    </section>

@endsection

