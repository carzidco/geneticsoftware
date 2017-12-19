<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <nav style="background-color: #291c6b">
      <div class="nav-wrapper">
        <a href="{{{ url('/serviciosbm') }}}" class="brand-logo">&nbsp;Servicios BM</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="{{{ url('/serviciosbm/intelligence') }}}">Business Intelligence</a></li>
          <li><a href="{{{ url('/serviciosbm/cart') }}}">Carrito en línea</a></li>
          <li><a href="{{{ url('/serviciosbm/telegram') }}}">Telegram</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="{{ asset('js/plugins.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  {{-- <script src="{{ asset('js/charts-bar-custom.js') }}"></script> --}}
  <script src="{{ asset('js/materialize.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
      //Autocomplete
      $(function() {
        $.ajax({
          type: 'GET',
          url: '/serviciosbm/intelligence/products',
          success: function(response) {
            var productArray = JSON.parse(response);
            var dataProduct = {};
            for (var i = 0; i < productArray.length; i++) {
              dataProduct[productArray[i].name] = productArray[i].name; //countryArray[i].flag or null
            }
            $('input.autocomplete').autocomplete({
              data: dataProduct,
              limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
            });
          }
        });
      });
    });
  </script>
</html>
