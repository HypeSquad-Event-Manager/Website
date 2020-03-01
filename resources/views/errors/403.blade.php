@section('title', 'Home')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>


        <div class="hero-body">
            <div class="container has-text-centered is-center">

                    <img src="{{ asset('img/blurple_map.png') }}" class="is-horizontal-center" alt="Discord map">
                  <p class="title is-1">
                  <strong>403</strong>
                  </p>
                <p class="title is-5">
                    You need the <code>Coordinator</code> role in-order to get access to this/these page(s).
                </p>
    </section>

@endsection
