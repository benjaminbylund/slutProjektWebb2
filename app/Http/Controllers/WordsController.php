<?php

namespace App\Http\Controllers;

use App\Words;
use DB;

use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function index(){

        $words = Words::all();

//        return $words;

        return view('index', compact('words'));
    }

    public function show(){

    }

    public function update(){

    }

    public function raw() {
        //1 = adjektive 2 = object 3 = action 4 = object2 5 = location
        $randomAdj = rand(1, 173);
        $randomObj = rand(1, 361);
        $randomAct = rand(226, 354);
        $randomLoc = rand(1, 296);

        $results = DB::select( DB::raw("select t1.adjword, t2.objword, t3.actword, t4.obj2word, t5.locword from
            (select adjective_words.word as adjword from adjective_words where id = " . $randomAdj . " ) as t1,
            (select object_words.word as objword from object_words where id = " . $randomObj . " ) as t2,
            (select action_words.word as actword from action_words where id = " . $randomAct . " ) as t3,
            (select object2_words.word as obj2word from object2_words where id = " . $randomObj . " ) as t4,
            (select location_words.word as locword from location_words where id = " . $randomLoc . " ) as t5;        
        ") );

        /*
        $results = DB::select( DB::raw("select t1.adjword from
        (select adjective_words.word as adjword from adjective_words where id = " . $randomAdj . " ) as t1;
            
    ") );

        $results = DB::select( DB::raw("select t2.objword from
        (select object_words.word as objword from object_words where id = " . $randomObj . " ) as t2;
             
    ") );

        $results = DB::select( DB::raw("select t3.actword from
        (select action_words.word as actword from action_words where id = " . $randomAct . " ) as t3;
               
    ") );

        $results = DB::select( DB::raw("select t5.locword from
            (select location_words.word as locword from location_words where id = " . $randomLoc . " ) as t5;        
        ") );

        $results = DB::select( DB::raw("select t4.obj2word from
    
            (select object2_words.word as obj2word from object2_words where id = " . $randomObj . " ) as t4;
                
        ") );
*/      

//        print_r($results);

     return view('about', compact('results'));

        return $results; 
    }
}
