<?php
namespace App\Controlers;
use App\App;

class HomeControler {

        public function home()
        {


            return App::views('home/index', [
                'title' => 'Home'
            ]);
        }


}