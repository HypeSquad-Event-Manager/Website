
@section('title', 'Bio')
@section('content')
    @extends('layouts.base')
<section class="hero is-medium is-primary">
    <div class="hero-head">@include ('layouts.nav')</div>

    <form action="{{ url("bio/edit") }}" method="post">
        @csrf
        <div class="container">
    <div class="box is-fullheight">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
                <img class="is-rounded" src="{{ Auth::user()->avatar }}" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ Auth::user()->username }}</strong><small>#{{ Auth::user()->discrim }}</small>
                <br />
              </p>
              <div class="columns is-multiline is-centered">

              <div class="column is-one-third">
                          <div class="field is-grouped">
                        <input type="date" name="dob" class="input">
                        </div>
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('description') ? 'is-danger' : '' }}" type="text" name="description" placeholder="Please enter a description about yourself"> @if ($errors->has('description'))
                    <p class="help has-text-danger">{{ $errors->first('description') }}</p>@endif
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('gender') ? 'is-danger' : '' }}" type="text" name="gender" placeholder="Please select your gender"> @if ($errors->has('gender'))
                    <p class="help has-text-danger">{{ $errors->first('gender') }}</p>@endif
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('status') ? 'is-danger' : '' }}" type="text" name="status" placeholder="Please enter your status"> @if ($errors->has('status'))
                    <p class="help has-text-danger">{{ $errors->first('status') }}</p>@endif
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" placeholder="Please enter your email"> @if ($errors->has('email'))
                    <p class="help has-text-danger">{{ $errors->first('email') }}</p>@endif
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('occupation') ? 'is-danger' : '' }}" type="text" name="occupation" placeholder="Please enter your occupation"> @if ($errors->has('occupation'))
                    <p class="help has-text-danger">{{ $errors->first('occupation') }}</p>@endif
                </div>
                <div class="column is-one-third">
                    <input class="input {{ $errors->has('sexuality') ? 'is-danger' : '' }}" type="text" name="sexuality" placeholder="Please enter your sexuality"> @if ($errors->has('sexuality'))
                    <p class="help has-text-danger">{{ $errors->first('sexuality') }}</p>@endif
                </div>


              </div>


            </div>
        </div>
        </article>
      </div>
    </div>

    <br />

    <div class="container">
        <button class="button is-dark is-fullwidth">Submit</button>

    </div>

</form>

</section>

@endsection


