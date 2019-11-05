@section('title', 'Information')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
        <div class="split left is-primary">
            <div class="centered">
                <h1 class="title is-4" style="margin-top: -150%">About this project</h1>
                <p>
                    Lorem Ipsum
                </p>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <h2>Map Here</h2>
            </div>
    </section>

@endsection
{{-- Create css file when not tired xD --}}
<style>
    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
    }

    .right {
        right: 0;
    }
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    </style>
