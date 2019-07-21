<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\Recommendbook;
use App\Vote;
use App\Book;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::where('votes','<',10)->get();
        $book = Book::orderBy('votes','DESC')->take(1)->first();
        // dd($book);
        return view('pages.mahasiswa.vote.index', compact('books', 'book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $recommend = Recommendbooks::find($id);
        return view('pages.mahasiswa.vote.form', compact('recommend'));
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

        $data = [
            'user_id' => Sentinel::getUser()->id,
            'book_id' => $request->book_id,
            'vote'=>1
        ];
        // dd($data);
        $vote = Vote::create($data);

        $book = Book::where('id','=',$request->book_id)->first();
        // dd($book);
        $vote = $book->votes + 1;
        // dd($vote);
        $data_book = [
            'votes' => $vote,
        ];

        // dd($data_book);
        $book->fill($data_book)->save();

        return redirect()->route('mahasiswa.vote.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $recommends = Recommendbook::all();

        return view('pages.mahasiswa.vote.add', compact('recommends'));

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

    public function detail($id)
    {
        //
        $book = Book::find($id);
        $books = Book::orderBy('votes','DESC')->take(3)->get();

        return view('pages.mahasiswa.vote.detail', compact('book','books'));
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
