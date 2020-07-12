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
            <div class="column">
                <div class="box is-parent" style="max-width: 500px; min-height: 400px;">
                    <div class="content has-text-centered" style="white-space: inherit;
                  word-break: break-word;">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
                        <p class="title" style="padding: 10px;">You have successfully added an event!</p>
                        <p class="subtitle" style="padding: 10px;">Amazing!</p>
                        <p class="subtitle" style="padding: 10px;">Event created with ID: {{ $eventID }}!</p>
                        <div class="content">
                            <br />
                            <button class="button is-large is-primary is-outlined">More Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img style="bottom: -20px;position: absolute; " src="{{ asset('img/svg_wave.svg') }}" alt="">

</section>

@endsection


<style>
    .checkmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #7289da;
        fill: none;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    }

    .checkmark {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #2c2f33;
        stroke-miterlimit: 10;
        margin: 10% auto;
        box-shadow: inset 0px 0px 0px #7289da;
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    }

    .checkmark__check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }
    @keyframes scale {
        0%, 100% {
            transform: none;
        }
        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }
    @keyframes fill {
        100% {
            box-shadow: inset 0px 0px 0px 30px #7289da;
        }
    }
</style>
