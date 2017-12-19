<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function index(){
      $products = Product::all();
      $product_quantity = Session::get('product_quantity') != null ? Session::get('product_quantity') : 0;
      return view('index_cart')
              ->with('products', $products)
              ->with('product_quantity', $product_quantity);
    }
    
    public function addProduct(){
      $product_quantity = Session::get('product_quantity');
      $product_quantity = $product_quantity + 1;
      return Redirect::route('serviciosbm.cart')->withMessage('Producto agregado');
    }
    
}
