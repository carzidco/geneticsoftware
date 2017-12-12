<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class IndexController extends Controller
{
    public function index(){
      // $telegram = new Api('467161914:AAHaFamwb7ZRjxt9tGaALUoZIapX3bEcC7c');
      // $response = $telegram->getMe();
      return view('index');
    }
}
