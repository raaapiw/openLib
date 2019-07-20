<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\Book;

class UserController extends Controller
{
    //
    public function dashboard(){
        

        return view('pages.mahasiswa.dashboard');
    }
    public function leaderboard(){

        return view('pages.mahasiswa.leaderboard.index');
    }
}
