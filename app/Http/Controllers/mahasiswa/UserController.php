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

        $realesed = Book::where('votes','>=',10);
        $realese = $realesed->orderBy('updated_at','DESC')->take(7)->get();
        $book = Book::where('votes','<', 10);
        $books = $book->orderBy('votes','DESC')->take(3)->get();
        $reviews = Review::orderBy('updated_at','DESC')->take(3)->get();
        $user = User::orderBy('points','DESC')->take(1)->first();
        return view('pages.mahasiswa.dashboard', compact('realese', 'books','reviews','user'));
    }
    public function leaderboard(){

        $users = User::orderBy('reviews','DESC')->take(7)->get();
        return view('pages.mahasiswa.leaderboard.index', compact('users'));
    }

    public function profile($id){
        $user = User::where('id','=',$id)->first();
        $reviews = Review::where('user_id','=',$id)->get();
        return view ('pages.mahasiswa.profile', compact('user', 'reviews'));
    }
}
