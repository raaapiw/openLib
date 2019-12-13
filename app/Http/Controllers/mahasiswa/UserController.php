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

        return view('pages.mahasiswa.search', compact('books'));

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
        return view('pages.mahasiswa.search', compact('books'));

    }


    public function dashboard(){

        $realesed = Book::where('votes','>=',10);
        $realese = $realesed->orderBy('updated_at','DESC')->take(7)->get();
        $book = Book::where('votes','<', 10);
        $books = $book->orderBy('votes','DESC')->take(3)->get();
        $reviews = Review::orderBy('updated_at','DESC')->take(3)->get();
        $user = User::orderBy('points','DESC')->take(1)->first();

        $winwin = Book::where('votes','=',10);
        $winner = $winwin->orderBy('updated_at','DESC')->take(1)->first();
        return view('pages.mahasiswa.dashboard', compact('realese', 'books','reviews','user','winner'));
    }
    public function leaderboard(){

        $users = User::orderBy('points','DESC')->take(10)->get();
        $user = User::orderBy('points','DESC')->take(1)->first();
        return view('pages.mahasiswa.leaderboard.index', compact('users', 'user'));
    }

    public function profile($id){
        $user = User::where('id','=',$id)->first();
        $reviews = Review::where('user_id','=',$id)->get();
        return view ('pages.mahasiswa.profile', compact('user', 'reviews'));
    }
}
