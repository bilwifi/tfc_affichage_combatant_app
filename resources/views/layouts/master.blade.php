<!doctype html>
<html lang="en">
  
<!-- Mirrored from getbootstrap.com/docs/4.1/examples/starter-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:57 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Bil Wifi" content="{{ config('app.name') }} by KinDev">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('favicon.ico') }}>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ !empty ($title) ? $title .' | '. config('app.name') : config('app.name') }}  </title>

    @yield('stylesheet1')
        <!-- Custom CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/icons/font-awesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      body {
              padding-top: 5rem;
            }
            .starter-template {
              padding: 3rem 1.5rem;
              text-align: center;
            }
    </style>
    @yield('stylesheet')
    <!-- Coustom styleSheet--->
    @stack('stylesheets')


</head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Acceuil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('gestion_combatants.index') }}">Combattants <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        {{-- <div class="my-2 my-lg-0">
          <button class="btn btn-outline-danger my-2 my-sm-0">Déconnexion</button>
        </div> --}}
      </div>
    </nav>

    
    <div class="content">
      @yield('content')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
{{--     <script src="../../assets/js/vendor/jquery-slim.min.js" ></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body> --}}

    <script src={{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}></script>

      <!-- BOOTSTRAP SCRIPTS -->
    <script src={{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}></script>
    <script src={{ asset('bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('js/popper.min.js') }}></script>
    @yield('script')
    @stack('scripts')
    @include('flashy::message')
    
  </body>

<!-- Mirrored from getbootstrap.com/docs/4.1/examples/cover/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:49 GMT -->

</html>
