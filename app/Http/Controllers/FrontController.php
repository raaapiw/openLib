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
        $catbooks = Book::where('votes','>=', 10);
        $books = $catbooks->when($request->keyword, function ($query) use ($request) {
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

    public function advancedSearch(Request $request, Book $book){
        $catbooks = Book::where('votes','>=', 10);
        $book = $catbooks->newQuery();

        // Search for a user based on their name.
        if ($request->has('nama_buku')) {
            $book->where('nama_buku', $request->input('nama_buku'));
        }

        // Search for a user based on their company.
        if ($request->has('pengarang')) {
            $book->where('pengarang', $request->input('pengarang'));
        }

        // Search for a user based on their city.
        if ($request->has('penerbit')) {
            $book->where('penerbit', $request->input('penerbit'));
        }

        if ($request->has('type')) {
            $book->where('type', $request->input('type'));
        }

        if ($request->has('code')) {
            $book->where('code', $request->input('code'));
        }

        if ($request->has('editor')) {
            $book->where('penyunting', $request->input('editor'));
        }
        // Continue for all of the filters.

        // Get the results and return them.
        $book->get();
        return view('pages.search', compact('book'));

    }

    public function home(){
        $realesed = Book::where('votes','>=',10);
        $realese = $realesed->orderBy('updated_at','DESC')->take(7)->get();
        $book = Book::where('votes','<', 10);
        $books = $book->orderBy('votes','DESC')->take(3)->get();
        $reviews = Review::orderBy('updated_at','DESC')->take(3)->get();
        $user = User::orderBy('points','DESC')->take(1)->first();
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
