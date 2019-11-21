@section('title', 'Success!')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-danger">
        <div class="hero-head">@include ('layouts.nav')</div>
        <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Something went wrong. Please try again.
      </h1>

    </div>
  </div>
    </section>

@endsection


