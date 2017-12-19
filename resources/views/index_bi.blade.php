@extends('layouts.app')
@section('content')
<div class="container container-full">
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
</div>
<div class="container container-full">
  <div class="ms-paper">
    <div class="row">
      <div class="col-md-3 ms-paper-menu-left-container">
        <div class="ms-paper-menu-left">
          <div class="panel-menu collapse" id="collapseMenu">
          </div>
        </div>
      </div>
      <!-- col-md-3 -->
      <div class="col-md-9 ms-paper-content-container">
        <div class="ms-paper-content">
          <section class="ms-component-section">
            <h3>Real Time</h3>
            <canvas id="myChart2"></canvas>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection