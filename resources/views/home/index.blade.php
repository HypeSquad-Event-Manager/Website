@section('title', 'Home')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>


        <div class="hero-body">
            <div class="container has-text-centered is-center">

                    <img src="{{ asset('img/blurple_map.png') }}" class="is-horizontal-center" alt="Discord map">

                <p class="title">
                    Discord HypeSquad Event Manager
                </p>
                <br />
                <p class="subtitle">
                    <strong>View</strong> and <strong>create</strong> your events with us
                </p>
                @auth
                @else
                    <a href="{{ route('login')  }}">
                        <button class="button is-large is-white has-text-primary">Login with Discord</button>
                    </a>
                @endauth
            </div>

        </div>
        <div class="container has-text-centered">
            <a class="subtitle is-4 is-spaced" href="{{ route('info') }}">Learn More</a>
        </div>
    </section>

@endsection
{{-- Make css when not tired xD --}}
<style>
    .is-horizontal-center {
        justify-content: center;
    }
    .bottom{
        position: absolute;
        bottom: 8px;
        font-size: 18px;

    }
    </style>
