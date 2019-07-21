<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use Sentinel;
use App\Book;
use App\User;
use App\Review;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $realese = Book::orderBy('updated_at','DESC')->take(7)->get();
        $books = Book::orderBy('votes','DESC')->take(3)->get();
        $reviews = Review::orderBy('updated_at','DESC')->take(3)->get();
        $user = User::orderBy('reviews','DESC')->take(1)->first();
        return view('pages.home', compact('realese', 'books', 'reviews', 'user'));
    }

    public function catalogue(){
        $books = Book::where('votes','>=',10)->get();
        return view('pages.catalogue', compact('books'));
    }

    public function vote(){
        $books = Book::where('votes','<',10)->get();
        $book = Book::orderBy('votes','DESC')->take(1)->first();
        return view('pages.vote', compact('books', 'book'));
    }

    public function leaderboard(){

        $users = User::orderBy('reviews','DESC')->take(7)->get();
        return view('pages.leaderboard', compact('users'));

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
