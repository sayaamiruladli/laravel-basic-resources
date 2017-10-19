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
    <div class="hero-body columns is-mobile is-multiline is-centered bg-overlay-image-1">
      <div class="column is-4">

        @include('components.alert')

        <form class="card" method="post" action="{{ route('login') }}">
          {{ csrf_field() }}
          <header class="card-header">
            <p class="card-header-title">
              Login
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
              <span class="tag is-success">Explore Awesomeness!</span>
            </a>
          </header>
          <div class="card-content">
            <div class="field">
              <div class="control">
                <input class="input" type="text" placeholder="Email" name="email">
              </div>
            </div>

            <div class="field">
              <div class="control">
                <input class="input" type="password" placeholder="Password" name="password">
              </div>
            </div>
          </div>
          <footer class="card-footer">
            <a href="{{ route('register') }}" class="card-footer-item">Register</a>
            <button class="card-footer-item button is-black is-fullheight is-radiusless" style="border:  transparent; height: auto" type="submit" id="btnlogin">Login</button>
          </footer>

          <script>
            $('#btnlogin').click(function(){

              $(this).addClass('is-loading');
            });
          </script>
        </form>
        <div class="is-divider" data-content="OR"></div>
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              Log in with your existing social profile
            </p>
          </header>
          <div class="card-content">
            <a class="button is-info is-fullwidth">
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                <span>Twitter</span>
              </a>

              <a class="button is-link is-fullwidth" style="margin-top: 1em">
                  <span class="icon">
                    <i class="fa fa-facebook"></i>
                  </span>
                  <span>Facebook</span>
                </a>
          </div>
        </div>

      </div>
    </div>

  </section>
</body>
@endsection
