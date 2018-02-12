<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Library\Mailer;
use App\Mail\Contact;
use App\Models\Subscription;
use Mail;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index(){
      // $telegram = new Api('467161914:AAHaFamwb7ZRjxt9tGaALUoZIapX3bEcC7c');
      // $response = $telegram->getMe();
      $wp_posts = $this->get_wp_posts();
      return view('index')->with('posts', $wp_posts);
    }

    public function servicios_bm_menu(){
      return view('servicios_bm_menu');
    }

    public function get_wp_posts(){
      $client = new Client();
      $body = $client->get('http://blog.geneticsoftware.net/wp-json/wp/v2/posts/')->getBody();
      $posts = json_decode($body);
      foreach ($posts as $p) {
        $p->formatted_date = Carbon::parse($p->date);
      }
      return $posts;
    }
    
    public function send_email(){
      $emails = explode(',', INFO_EMAIL);
      Mail::to($emails)
            ->send(
              new Contact(
                $_POST["name"], $_POST["email"],
                $_POST["subject_info"], $_POST["message_info"])
              );
      return Redirect::route('index')->withTitle(INFO_TITLE)->withMessage(INFO_MESSAGE);
    }
    
    public function add_news_subscription(){
      $email = $_POST["email"];
      $subscription = new Subscription();
      $subscription->email = $email;
      $subscription->active = 1;
      $subscription->save();
      return Redirect::route('index')->withTitle(SUBSCRIPTION_TITLE)->withMessage(SUBSCRIPTION_MESSAGE);
    }
    

}
