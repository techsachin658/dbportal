<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\PasswordSecurity;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return view('admin.dashboard',compact('users'));
    }
    public function users(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function adduser(){
        return view('admin.add-user');
    }
    public function showuser($id)
    {
        $user = User::find($id);
        return view('admin.show-user')->with('user', $user);
    }
    public function addNewUser(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255']
            ]);
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $user->save();
            $id = DB::table('users')->max('id');
            $passwordSecurity = new PasswordSecurity();
                $passwordSecurity->user_id=$id;
                $passwordSecurity->password_expiry_days =  30;
                $passwordSecurity->password_updated_at = Carbon::now();
            $passwordSecurity->save();
            
        return redirect()->back()->with('success', 'User Added');
    }

    public function adminprofile($id){
        $user = User::find($id);
        return view('admin.admin-profile',compact('user'));
    }
}