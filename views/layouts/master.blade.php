<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Course Advisor</title>

  <!-- Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset(mix('css/omni.css')) }}">
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('head')
</head>
<body>

  @if(isset($home))
  <section class="hero is-info is-medium bg-rainbow">
    <div class="hero-head">
      <div class="container">
      @include('components.nav')
      </div>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          The new standard in &lt;insert industry here&gt;
        </h1>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </h2>
      </div>
    </div>

  </section>
  @else
  <div style="background: white">
  <div class="container">
  @include('components.nav')

  </div>
  </div>
  @endif

  @yield('content')
  
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma Templates</strong> by <a href="https://github.com/dansup">Daniel Supernault</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
        </p>
        <p>
          <a class="icon" href="https://github.com/dansup/bulma-templates">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>


</body>
</html>