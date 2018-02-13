<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UtilController extends Controller
{
    public function email(){
      return Redirect::to('https://sso.godaddy.com/?realm=pass&app=o365&isc=isc');
    } 

}
