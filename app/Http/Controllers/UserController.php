<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Exceptions\User\WrongCredentialException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Sentinel;
use App\User;
use App\Notification;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
        return redirect()->route('home');
    }

    public function login(){
        return view('home');
    }

    public function postLogin(Request $request){
        try{
            Sentinel::authenticate($request->all());
            if(Sentinel::check()){
                if(Sentinel::getUser()->roles()->first()->slug == 'superAdmin')
                    return redirect()->route('superAdmin.dashboard');
                elseif(Sentinel::getUser()->roles()->first()->slug == 'admin')
                    return redirect()->route('admin.dashboard');
                else
                    return redirect()->route('mahasiswa.dashboard');
            }else{
                throw new WrongCredentialException("Username atau Password salah");
            }
        } catch (WrongCredentialException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "You are banned for $delay seconds."]);
        }
    }

    public function postLogout()
    {
        Sentinel::logout();
        return redirect()->route('home');
    }

    public function get()
    {
        $user = Sentinel::getUser();
        $notifications = $user->unreadNotifications;
        // dd($notifications);
        return $notifications;
    }

    public function read(Request $request){
        Sentinel::getUser()->unreadNotifications()->find($request->id)->markAsRead();
        return 'succes';

    }
}
