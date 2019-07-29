<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use Sentinel;
use App\Book;
use App\User;
use App\Review;
Use Alert;
use App\crud;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function simpleSearch(Request $request){
        $books = Book::when($request->keyword, function ($query) use ($request) {
            $query->where('nama_buku', 'like', "%{$request->keyword}%")
                ->orWhere('pengarang', 'like', "%{$request->keyword}%")
                ->orWhere('penerbit', 'like', "%{$request->keyword}%")
                ->orWhere('jenis', 'like', "%{$request->keyword}%")
                ->orWhere('penyunting', 'like', "%{$request->keyword}%")
                // ->orWhere('tahun_terbit', 'like', "%{$request->keyword}%")
                ->orWhere('kota_penerbit', 'like', "%{$request->keyword}%");
        })->paginate();

        return view('pages.search', compact('books'));

    }
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

    public function detailCatalogue($id)
    {
        //
        $reviews = Review::where('book_id','=', $id)->get();
        $book = Book::find($id);
        $books = Book::orderBy('votes','DESC')->take(3)->get();

        return view('pages.detailCatalogue', compact('book', 'reviews', 'books'));
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
