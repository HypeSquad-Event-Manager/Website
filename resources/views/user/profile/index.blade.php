
@section('title', 'Profile')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
        <div class="container">
        	<img src="{{ Auth::user()->avatar }}">
		<br />
        	{{ Auth::user()->username }}#{{ Auth::user()->discrim }}
        	<br />
        	{{ Auth::user()->userid }}
		<br />
		{{ Auth::user()->created_at }}
        </div>
    </section>

@endsection

