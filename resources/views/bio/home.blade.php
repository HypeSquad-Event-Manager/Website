@php
    use App\User_Bios;
@endphp
@section('title', 'Bio')
@section('content')
    @extends('layouts.base')
<section class="hero is-medium is-primary">
    <div class="hero-head">@include ('layouts.nav')</div>
    <div class="columns is-centered is-multiline">

    @foreach (User_Bios::all() as $user)
        <div class="column is-5">
        <div class="container" style="padding: 10px;">
    <div class="box is-fullheight">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
                <img class="is-rounded" src="{{ $user->avatar }}" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ $user->username }}</strong><small>#{{ $user->discrim }}</small>
                <br />
                <span class="tag is-primary"><i class="fas fa-clock"></i>&nbsp;{{ $user->status }}</span> @if ($user->userid == '390179632911089666') <span class="tag is-danger"><i class="fas fa-file-code"></i>&nbsp;Lead Developer</span> @endif
                @if ($user->userid == '98093345506615296') <span class="tag is-danger"><i class="fas fa-tasks"></i></i>&nbsp;Project Leader</span> @endif
                @if ($user->userid == '141218912934166528') <span class="tag is-danger"><i class="fas fa-file-code"></i>&nbsp;Project Manager</span> @endif
                <br />
              </p>

                    <p><strong><i class="fas fa-info-circle"></i>&nbsp;Description:&nbsp;</strong> {{ $user->description }}</p>
                    <p><strong><i class="fas fa-envelope-square"></i>&nbsp;Email:&nbsp;</strong> {{ $user->email }}</p>
                    <p><strong><i class="far fa-calendar-times"></i>&nbsp;Date of Birth:&nbsp;</strong> {{ $user->dob }}</p>
                    <p><strong><i class="far fa-user"></i>&nbsp;Gender:&nbsp;</strong> {{ $user->gender }}</p>
                    <p><strong><i class="far fa-user"></i>&nbsp;Occupation:&nbsp;</strong> {{ $user->occupation }}</p>
                    <p><strong><i class="far fa-user"></i>&nbsp;Created At:&nbsp;</strong> {{ $user->created_at }}</p>
                    <p><strong><i class="far fa-user"></i>&nbsp;Updated At:&nbsp;</strong> {{ $user->updated_at }}</p>
                    <p><strong><i class="far fa-user"></i>&nbsp;Slug:&nbsp;</strong> {{ $user->slug }}</p>

              </div>
        </div>
        </article>
      </div>
    </div>
</div>
      @endforeach
    </div>


</section>

@endsection

