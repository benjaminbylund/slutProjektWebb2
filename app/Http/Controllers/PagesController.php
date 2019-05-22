<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $words = [
            'kick',
            'wave',
            'yell',
            'walk',
            'run',
        ];
        
        return view('welcome')->withWords($words);
    }
}
