<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/style-bm.css') }}" rel="stylesheet">
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
      <br>
      <div class="row">
        <div class="col s12">
          <div class="col s6">
            <img src="{{ asset('/images/logo_bm.png') }}" width="50" height="50"/>
          </div>
          <div class="col s6" style="text-align:right; margin-top: 10px">
            <i class="material-icons" style="color:#291c6b">shopping_cart</i> {{{ $product_quantity }}} Productos en el carrito
            <i class="material-icons" style="color:#291c6b">person</i> Hola, Carlos
          </div>
        </div>
      </div>
      <div class="row">
        <nav style="background-color: #291c6b">
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" class="portfolio_search_field autocomplete" style="font-size: 15px" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
      </div>
      <div class="row">
        <section class="portfolio_strict">
             <div class="container">
                  <div class="row isotope_portfolio_container">
                       @foreach($products as $product)
                         <div class="{{{ $product->name }}} col-xs-12 col-sm-6 col-md-4 col-lg-4">
                              <div class="portfolio_item"> <a href="{{ url('/products/view/') }}{{{ "/".$product->id }}}" target="_blank" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                                   <figure style="background-image:url(http://www.guiatelefonicacostarica.com/pictures/profile/supermercado-en-san-vito-hogar-centro-san-vito-puntarenas-264.jpg)">
                                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                             <path d="M 180,0 0,0 0,0 180,0 z"/>
                                        </svg>
                                        <figcaption>
                                             <p class="product_description">Descripción del producto</p>
                                        </figcaption>
                                   </figure>
                                   </a>
                                   <div class="portfolio_description">
                                        {{{ $product->name }}}
                                        <h3><a href="" class="name" >
                                          <i class="material-icons">add_shopping_cart</i>
                                        </a></h3>
                                        <p>{{{ $product->category_name }}}</p>
                                   </div>
                              </div>
                         </div>
                       @endforeach
                  </div>
             </div>
        </section>
      </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="{{ asset('js/plugins.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
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
            var productArray = response;
            var dataProduct = {};
            for (var i = 0; i < productArray.length; i++) {
              dataProduct[productArray[i].name] = "http://www.guiatelefonicacostarica.com/pictures/profile/supermercado-en-san-vito-hogar-centro-san-vito-puntarenas-264.jpg"; //countryArray[i].flag or null
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
  <script src="{{ asset('js/modernizr.custom.48287.js') }}"></script>
  <script src="{{ asset('js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js') }}"></script>
  <script src="{{ asset('js/prettyPhoto_3.1.5/jquery.prettyPhoto.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/isotope/jquery.isotope.min.js') }}"></script>
</html>
