<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\User;
use App\Vote;
use App\Book;
use App\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        // $reviews = Review::where('user_id','=', Sentinel::getUser()->id)->get();
        $books = Book::where('votes','>=',10)->get();

        return view('pages.mahasiswa.review.index', compact('books'));
    }

    public function detail($id)
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

        return view('pages.mahasiswa.review.detail', compact('book', 'reviews', 'books','rating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catalogue = Cataloguebooks::find($id);

        return view('pages.mahasiswa.review.form', compact('catalogue'));
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
        // $data = $request->all();
        // if($request->ajax()){
        //     $ratingValue = $request->ratingValue;
        //     return response()->json($ratingValue);
        // }
        // $ratingValue = $request->input('ratingValue');
        // dd($data);
        $data = [
            'user_id' => Sentinel::getUser()->id,
            'book_id' => $request->book_id,
            'keterangan' =>$request->subject,
            'review'=> $request->review,
            'rating'=> $request->ratingValue

        ];
        // dd($data);
        $review = Review::create($data);

        $user = User::where('id','=',Sentinel::getUser()->id)->first();
        // dd($book);
        $reviews = $user->reviews + 1;
        $point = $user->points + 10;
        // dd($vote);
        $data_user = [
            'reviews' => $reviews,
            'points' =>$point
        ];

        // dd($data_book);
        $user->fill($data_user)->save();

        $book = Book::where('id','=',$request->book_id)->first();
        // dd($book);
        $reviews = $book->reviews + 1;
        $rating = $book->rating + $request->ratingValue;
        // dd($vote);
        $data_book = [
            'reviews' => $reviews,
            'rating'=> $rating
        ];

        // dd($data_book);
        $book->fill($data_book)->save();

        return redirect()->route('mahasiswa.review.index');
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
        $catalogs = Cataloguebooks::all();

        return view('pages.mahasiswa.vote.add', compact('catalogs'));
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
