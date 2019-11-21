@section('title', 'Success!')
@section('content')
    @extends('layouts.base')

    <section class="hero is-fullheight is-success">
        <div class="hero-head">@include ('layouts.nav')</div>
        <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        You successfully submited a new event!
      </h1>
      <h2 class="subtitle">
        You can view this in the <a class="has-text-dark" href="{{ route('map') }}">map</a> or the <a class="has-text-dark" href="{{ route('dashboard') }}">dashboard</a>
      </h2>
    </div>
  </div>
    </section>

@endsection


