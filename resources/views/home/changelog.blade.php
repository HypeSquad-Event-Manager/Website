@section('title', 'Home')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>

    </section>
        <img style="bottom: -20px; position: absolute; " src="{{ asset('img/sadwd.svg') }}" alt="">

@endsection

