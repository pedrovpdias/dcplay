<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class MoviesController extends Controller
{
    //
    public function getMovies() {
        $highlights = DB::table('movies')->where('highlight', 1)->limit(1)->get();

        $dceu = DB::table('movies')->where('highlight', 0)->where('collection', 'DCEU')->orderBy('launch')->limit(15)->get();
        
        return view('app/movies', compact(['highlights', 'dceu']));
    }
}
