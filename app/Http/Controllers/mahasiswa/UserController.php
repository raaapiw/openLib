<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\Book;
use App\User;
use App\Review;

class UserController extends Controller
{
    //
    public function dashboard(){

        $realese = Book::orderBy('updated_at','DESC')->take(7)->get();
        $books = Book::orderBy('votes','DESC')->take(3)->get();
        $reviews = Review::orderBy('updated_at','DESC')->take(3)->get();
        $user = User::orderBy('reviews','DESC')->take(1)->first();
        return view('pages.mahasiswa.dashboard', compact('realese', 'books','reviews','user'));
    }
    public function leaderboard(){

        $users = User::orderBy('reviews','DESC')->take(7)->get();
        return view('pages.mahasiswa.leaderboard.index', compact('users'));
    }
}
