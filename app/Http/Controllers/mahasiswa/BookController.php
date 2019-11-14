<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\Book;
use App\User;
use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('pages.mahasiswa.book.form');
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
        $uploadedFile = $request->file('cover');

        // dd($uploadedFile);
        $text = str_replace(' ', '', $request->title);
        $uploadedFileName = $uploadedFile->getClientOriginalName();;
        // dd($uploadedFileName);

        if (Storage::exists($uploadedFileName)) {
            Storage::delete($uploadedFileName);
        }
        $path = $uploadedFile->storeAs('public/files/cover', $uploadedFileName);

        $data = [
            'user_id' => Sentinel::getUser()->id,
            'cover'=> $uploadedFileName,
            'nama_buku' => $request->title,
            'pengarang' => $request->author,
            'synopsis' => $request->synopsis,
            'penerbit' => $request->publisher,
            'votes' =>0,
            'reviews' =>0,
            'code' => $request->code,
            'type' => $request->type
        ];
        // dd($data);
        $book = Book::create($data);
        // dd($report);
        // $user = User::where('id','=',Sentinel::getUser()->id)->first();
        // // dd($book);
        // $reviews = $user->reviews + 5;
        // // dd($vote);
        // $data_user = [
        //     'reviews' => $reviews,
        // ];

        // dd($data_book);
        // $user->fill($data_user)->save();
        return redirect()->route('mahasiswa.dashboard');
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
        $book = Book::find($id);
        $vote = $book->votes + 1;
        $data = [
            'votes' => $vote,
        ];

        // dd($data);
        $book->fill($data)->save();
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
