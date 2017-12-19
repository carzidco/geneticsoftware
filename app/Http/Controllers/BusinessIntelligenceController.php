<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Response;

class BusinessIntelligenceController extends Controller
{
    public function index(){
      $product_list = Product::all();
      return view('index_bi')->with('product_list', $product_list);
    }
    
    public function getProducts(){
      $result = Product::all();
      return Response::json($result);
      //return json_encode($result);
    }
}
