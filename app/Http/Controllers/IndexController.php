<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
      /*$body = $client->get('http://blog.geneticsoftware.net/wp-json/wp/v2/posts/')->getBody();
      $posts = json_decode($body);
      foreach ($posts as $p) {
        $p->formatted_date = Carbon::parse($p->date);
      }*/
      $posts = [];
      return $posts;
    }

    public function send_email(Request $request){
      $captcha_token = $request->input('g-recaptcha-response');
      if($captcha_token){
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
          'form_params' => array(
              'secret'    => '6Lc-9EUUAAAAAB4xnNa3xE_wX_R3e1kzF-vt7fsA',
              'response'  => $captcha_token
          )
        ]);
        $result = json_decode($response->getBody()->getContents());
        if($result->success){
          $emails = explode(',', INFO_EMAIL);
          Mail::to($emails)
                ->send(
                  new Contact(
                    $_POST["name"], $_POST["email"],
                    $_POST["subject_info"], $_POST["message_info"])
                  );
          return Redirect::route('index')->withTitle(INFO_TITLE)->withMessage(INFO_MESSAGE);
        }
      }
      return Redirect::route('index')->withTitle(INFO_TITLE_ERROR)->withMessage(INFO_MESSAGE_ERROR);
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
