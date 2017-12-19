<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
      {{-- <div class="">
        <div class="ms-paper">
          <div class="row">
            <h3>Productos</h3>
            <div class="input-field col s12">
              <select multiple>
                <option value="" disabled selected>Seleccione un producto</option>
                @foreach($product_list as $product)
                  <option value="{{{ $product->id }}}">{{{ $product->name }}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="container container-full">
  <div class="ms-paper">
    <div class="row">
      <div class="col-md-9 ms-paper-content-container">
        <div class="ms-paper-content">
          <h1>Gráfico de barras</h1>
          <section class="ms-component-section">
            <canvas id="myChart"></canvas>
            <h3>Tiempo real - Comportamiento de compras</h3>
            <canvas id="myChart2"></canvas>
            <h2>Inside Cards</h2>
            <div class="row">
              <div class="col-md-6" style="display:none">
                <div class="card card-primary">
                  <div class="bg-primary">
                    <canvas id="myChart3"></canvas>
                  </div>
                  <div class="card-block">
                    <h3 class="color-primary">Lorem ipsum dolor sit</h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque error consequuntur dignissimos qui delectus unde, maxime et aut dolor ipsam fuga eum porro fugiat hic temporibus nesciunt veritatis
                    cum? </div>
                </div>
              </div>
              <div class="col-md-6" style="display:none">
                <div class="card card-warning">
                  <div class="bg-warning">
                    <canvas id="myChart4"></canvas>
                  </div>
                  <div class="card-block">
                    <h3 class="color-warning">Lorem ipsum dolor sit</h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque error consequuntur dignissimos qui delectus unde, maxime et aut dolor ipsam fuga eum porro fugiat hic temporibus nesciunt veritatis
                    cum? </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6" style="display:none">
                <div class="card card-primary">
                  <div class="bg-primary">
                    <canvas id="myChart5"></canvas>
                  </div>
                  <div class="card-block">
                    <h3 class="color-primary">Lorem ipsum dolor sit</h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque error consequuntur dignissimos qui delectus unde, maxime et aut dolor ipsam fuga eum porro fugiat hic temporibus nesciunt veritatis
                    cum? </div>
                </div>
              </div>
              <div class="col-md-6" style="display:none">
                <div class="card card-royal">
                  <div class="bg-royal">
                    <canvas id="myChart6"></canvas>
                  </div>
                  <div class="card-block">
                    <h3 class="color-royal">Lorem ipsum dolor sit</h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque error consequuntur dignissimos qui delectus unde, maxime et aut dolor ipsam fuga eum porro fugiat hic temporibus nesciunt veritatis
                    cum? </div>
                </div>
              </div>
            </div>
            <div class="card card-danger-inverse">
              <canvas id="myChart7"></canvas>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-graduation-cap"></i>Ventas por producto</h3>
              </div>
              <canvas id="myChart8"></canvas>
            </div>
          </section>
        </div>
        <!-- ms-paper-content -->
      </div>
      <!-- col-md-9 -->
    </div>
    <!-- row -->
  </div>
  <!-- ms-paper -->
</div>
      </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="{{ asset('js/plugins.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="{{ asset('js/charts-bar.js') }}"></script>
  <script src="{{ asset('js/materialize.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
</html>
