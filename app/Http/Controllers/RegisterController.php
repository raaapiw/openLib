<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Sentinel;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
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
        $data = [
            'name'      => $request->name,
            'nim'      => $request->nim,
            'gender'    => $request->gender,
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => $request->password,
            'faculty'  => $request->faculty,
            'reviews'  => 0,
            'points'  => 0,
            'gender' => $request->gender
        ];
        // dd($data);
        $user = Sentinel::registerAndActivate($data);
        $role = Sentinel::findRoleBySlug('mahasiswa');
        $user->roles()->attach($role);

        return redirect()->route('login');
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
