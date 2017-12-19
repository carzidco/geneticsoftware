<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Response;
use DB;

class BusinessIntelligenceController extends Controller
{
    public function index(){
      $product_list = Product::all();
      return view('index_bi')->with('product_list', $product_list);
    }
    
    public function getProducts($location_id){
      $result = "";
      if(isset($location_id)){
        $result = DB::table('bm_products as p')
                  ->join('bm_products_per_locations as ppl', 'ppl.product_id', '=', 'p.id')
                  ->join('bm_locations as l', 'l.id', '=', 'ppl.location_id')
                  ->where('ppl.location_id', '=', $location_id)
                  ->get(['p.*', 'ppl.price']);
      }
      else{
        $result = Product::all();
      }
      return Response::json($result);
      //return json_encode($result);
    }
}
