<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
        {
            return view ('index');
        }

        public function perawatan()
        {
            return view ('/perawatan/index');
        }

        public function tentang()
        {
            return view ('/tentang/index');
        }
        
        public function reservasi()
        {
            return view ('/reservasi/index');
        }
}
