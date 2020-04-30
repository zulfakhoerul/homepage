<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAdmin;
use Hash;
use Session;

class AdminController extends Controller
{
    public function index(){
        if(!Session::get('/admin/loginAdmin')){
            return redirect('/admin/loginAdmin')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('/admin/DashboardAdmin');
        }
    }

    public function loginAdmin(){
        return view('/admin/loginAdmin');
    }

    public function loginAdminPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelAdmin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama_admin',$data->nama_admin);
                Session::put('username',$data->username);
             
                Session::put('/admin/loginAdmin',TRUE);
                return redirect('/admin/DashboardAdmin');
            }
            else{
                return redirect('/admin/loginAdmin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/admin/loginAdmin')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logoutAdmin(){
        Session::flush();
        return redirect('/admin/loginAdmin')->with('alert','Kamu sudah logout');
    }

    public function registerAdmin(Request $request){
        return view('/admin/registerAdmin');
    }

    public function registerAdminPost(Request $request){
        $this->validate($request, [
            'nama_admin' => 'required|min:4',
            'username' => 'required|min:4',
            'email' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            
        ]);

        $data =  new ModelAdmin();
        $data->nama_admin = $request->nama_admin;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        
        $data->save();
        return redirect('/admin/loginAdmin')->with('alert-success','Kamu berhasil Register');
    }// */
}
