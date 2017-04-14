<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sapadia</title>

    {{-- Memanggil Bootstrap. Komentar ini tidak akan tampak di browser. --}}
    <link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="{{ asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') }}"></script>
      <script src="{{ asset('http://laravelapp.dev/js/respond_1_4_2.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>
    <div id="navbar">
      @include('navbar')
    </div>
    <div id="parallax">
      @yield('paralax')
    </div>
    <div class="container">
      @yield('main')
    </div>


    @yield('footer')

    <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/laravelapp.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('/parallax.js-1.4.2/parallax.js') }}"></script>

  </body>
</html>
