<?php
namespace App\Controlers;
use App\App;

class ClientsControler {

        public function home()
        {


            return App::views('home/index', [
                'title' => 'Home'
            ]);
        }


}