@extends('layouts.master')

@section('head')
<style>
  .is-divider-vertical[data-content]:after, .is-divider[data-content]:after {
      background: #fff;
      color: #b5b5b5;
      content: attr(data-content);
      display: inline-block;
      font-size: .75rem;
      padding: .5rem .8rem;
      -webkit-transform: translateY(-1.1rem);
      transform: translateY(-1.1rem);
      text-align: center;
      border-radius: 20px;
  }
</style>
@endsection

@section('content')
<body class="layout-default">
  <section class="hero is-fullheight is-medium is-bold bg-rainbow">
    <div class="hero-body columns is-mobile is-multiline is-centered bg-overlay-image">
      <div class="column is-4-desktop is-12-mobile">

        @include('components.alert')

        <form class="card" method="post" action="{{ route('register') }}" id="form">
          {{ csrf_field() }}
          <header class="card-header">
            <p class="card-header-title">
              Join Us 
            </p>
          </header>
          <div class="card-content">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="eg: amirul" value="{{ old('name') }}" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" name="email" placeholder="eg: amirul@gmail.com" value="{{ old('email') }}" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control">
                <input class="input" type="password" name="password" placeholder="Password" required>
              </div>
              <div class="control" style="margin-top: 0.5em">
                <input class="input" type="password" name="password_confirmation" placeholder="Password confirmation" required>
              </div>
            </div>
          </div>
          <footer class="card-footer">
            <a href="{{ route('login') }}" class="card-footer-item">Login</a>
            <button class="card-footer-item button is-black is-fullheight is-radiusless" style="border:  transparent; height: auto" type="submit" id="submit">Register</button>
          </footer>
        </form>
        <script>
            $('#form').submit(function(){

              $('#submit').addClass('is-loading');
            });
        </script>
      </div>
    </div>

  </section>
</body>
@endsection
