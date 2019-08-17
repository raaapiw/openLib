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
        $books = Book::where('votes','>=', 10);
        // dd($catbooks);
        // $books = $catbooks->newQuery();

        // Search for a user based on their name.
        if ($request->nama_buku) {
            $books = $books->where('nama_buku', 'LIKE', "%" . $request->nama_buku . "%");

            // $books->where('nama_buku',$request->nama_buku);
            // dd($books);
        }

        // Search for a user based on their company.
        // dd($request->pengarang);
        if ($request->pengarang) {
            $books = $books->where('pengarang', 'LIKE', "%" . $request->pengarang . "%");
            // $books->where('pengarang', $request->input('pengarang'));
        }

        if ($request->penerbit) {
            $books = $books->where('penerbit', 'LIKE', "%" . $request->penerbit . "%");
            // $books->where('penerbit', $request->input('penerbit'));
        }

        if ($request->type) {
            $books = $books->where('type', 'LIKE', "%" . $request->type . "%");
            // $books->where('type', $request->input('type'));
        }

        if ($request->code) {
            $books = $books->where('code', 'LIKE', "%" . $request->code . "%");
            // $books->where('code', $request->input('code'));
        }

        if ($request->editor) {
            $books = $books->where('pennyunting', 'LIKE', "%" . $request->editor . "%");
            // $books->where('penyunting', $request->input('editor'));
        }
        // Continue for all of the filters.

        // Get the results and return them.
        $books = $books->paginate();
        // dd($books);
        return view('pages.search', compact('books'));

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
        if ($book->reviews == 0){
            $rating = 0;
        }
        else{
            $rating = $book->rating/$book->reviews;
        }
        $books = Book::orderBy('votes','DESC')->take(3)->get();

        return view('pages.detailCatalogue', compact('book', 'reviews', 'books','rating'));
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
