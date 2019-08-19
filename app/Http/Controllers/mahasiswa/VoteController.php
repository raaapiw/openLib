<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Input as Input;
use Sentinel;
use App\Recommendbook;
use App\Vote;
use App\Book;
use App\User;

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
        $posts = Book::where('votes','<',10);
        $books = $posts->whereDoesntHave('votess', function ($query) {
            $query->where('user_id','=', Sentinel::getUser()->id);
        })->get();

        $voted = Vote::where('user_id','=',Sentinel::getUser()->id)->get();

        // $buku =
        // $vote = Vote::where('user_id','=', Sentinel::getUser()->id)->get();
        // dd($books->votess->first()->user_id);
        // $c = Book::has('votess')->count();
        // dd($c);
        // $vote = Vote::where('book_id','=',$books->id)->first();
        // dd($books->votess->user_id);
        $winwin = Book::where('votes','=',10);
        $book = $winwin->orderBy('updated_at','DESC')->take(1)->first();
        // dd($book);
        return view('pages.mahasiswa.vote.index', compact('books', 'book','voted'));
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
        $user = User::where('id','=',Sentinel::getUser()->id)->first();
        // dd($book);
        $point = $user->points +5;
        // dd($vote);
        $data_user = [
            'points' =>$point,
        ];

        // dd($data_book);
        $user->fill($data_user)->save();

        $book = Book::where('id','=',$request->book_id)->first();
        // dd($book);
        $vote = $book->votes + 1;
        // dd($vote);
        $data_book = [
            'votes' => $vote,
        ];

        // dd($data_book);
        $book->fill($data_book)->save();
        // dd($book->votes);
        if($book->votes == 10){
            $vote = Vote::where('book_id','=',$book->id)->get();
            // dd($vote);
            foreach($vote as $row){
                // $iduser = $row;
                // dd($iduser);
                $user1 = User::where('id','=',$row->user_id)->first();
                // dd($user1);
                $point = $user1->points +15;
                // dd($point);
                $bonus = [
                    'points' =>$point,
                ];
                // dd($bonus);
                $user1->fill($bonus)->save();

            }
            return redirect()->route('mahasiswa.vote.index');
        }
        return redirect()->route('mahasiswa.vote.index');
        // return dd($vote);
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
