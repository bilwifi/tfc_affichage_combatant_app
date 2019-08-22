<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
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
    <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">
     <link href="{{ asset('dataTables/dataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dataTables/buttons/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <style type="text/css">
        html,
        body {
          overflow-x: hidden; /* Prevent scroll on narrow devices */
        }

        body {
          /*padding-top: 56px;*/
        }

        @media (max-width: 991.98px) {
          .offcanvas-collapse {
            position: fixed;
            top: 56px; /* Height of navbar */
            bottom: 0;
            left: 100%;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            visibility: hidden;
            background-color: #343a40;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility;
          }
          .offcanvas-collapse.open {
            left: 0;
            visibility: visible;
          }
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: nowrap;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          color: rgba(255, 255, 255, .75);
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        .nav-underline .nav-link {
          padding-top: .75rem;
          padding-bottom: .75rem;
          font-size: .875rem;
          color: #6c757d;
        }

        .nav-underline .nav-link:hover {
          color: #007bff;
        }

        .nav-underline .active {
          font-weight: 500;
          color: #343a40;
        }

        .text-white-50 { color: rgba(255, 255, 255, .5); }

        .bg-purple { background-color: #6f42c1; }

        .lh-100 { line-height: 1; }
        .lh-125 { line-height: 1.25; }
        .lh-150 { line-height: 1.5; }
    </style>
    <style type="text/css">
      .affiche-img{
        border-radius: 50% !important;
        height: 50%;
      }
      .affiche-img-panel{
        display: fixed;  
        height: 50%;
      }
      .dx-c{
        display: fixed;  
        align-items: right;
        margin-left: 50
      }
    </style>
  </head>

  <body class="bg-light">


    <main role="main" class="container-fluid">
      <div class="">
        <div class="row">
          <div class="col-5 d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="height: 120px">
            <img class="mr-3" src="{{ url(Storage::url($premier_combatant->picture)) }}" alt="" width="75" height="75">
            <div class="lh-100">
              <h1 class="mb-0 text-white lh-100">
                {{ $premier_combatant->nom .' '.$premier_combatant->prenom  }}
              </h1>
              <br>
              <small>Poid : {{ $premier_combatant->poid  }}Kg</small><br>
              <small>Catégorie : {{ $premier_combatant->lib  }}</small>
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center align-items-center"><h1>VS</h1></div>
          <div class="col-5  d-flex flex-row-reverse align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="height: 120px">
            <img class="mr-3" src="{{ url(Storage::url($dexieme_combatant->picture)) }}" alt="" width="75" height="75" style="margin-left: 3%">

            <div class="lh-100 " style="align-content: right; align-items: right;">
              <h1 class="mb-0 text-white lh-100">
                {{ $dexieme_combatant->nom .' '.$dexieme_combatant->prenom  }}
              </h1>
              <br>
              <small class="float-right">Poid : {{ $dexieme_combatant->poid  }}Kg</small><br>
              <small class="float-right">Catégorie : {{ $dexieme_combatant->lib  }}</small>
            </div>
          </div>
        </div>
        
      </div>

      <div class=" ">
        {{-- CONTENT --}}
        <div class="affiche-panel row">
          <div class="col-5 ">
            <div class="affiche-content">
              <div class="affiche-img-panel">
                <img src="{{ url(Storage::url($premier_combatant->picture)) }}" class="affiche-img img-fluid" width="500" height="500">
              </div> 
            </div>
          </div>
          <div class="col-2"></div>
          <div class="col-5">
            <div class="affiche-content">
              <div class="affiche-img-panel">
                <img src="{{ url(Storage::url($dexieme_combatant->picture)) }}" class="affiche-img img-fluid" width="500" height="500">
              </div> 
            </div>
          </div>
        </div>

      </div>

      
    </main>

    <script src={{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}></script>
    <script src={{ asset('js/jsDiscret.js') }}></script>
    <!-- <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src={{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}></script>
    <script src={{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}></script>
     <script type="text/javascript" src="{{ asset('dataTables/datatables.min.js') }}"></script>
     @stack('scripts')

  </body>

<!-- Mirrored from getbootstrap.com/docs/4.1/examples/floating-labels/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:42:06 GMT -->
</html>
