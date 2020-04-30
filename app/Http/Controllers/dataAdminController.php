<?php

namespace App\Http\Controllers;

use App\ModelAdmin;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dataAdminController extends Controller
{
    public function index(){
    	
    	if(!Session::get('loginAdmin')){
    		return redirect('loginAdmin')->with('alert','Maaf Anda Harus Login');
    	} else {
    		return view('admin.dataAdmin');
    	}
    }

    public function tambah() {
        return view('admin/TambahDataAdmin');
    }

    public function store( Request $request) {
        $this->validate($request, [
            'nama_admin' => 'required',
            'username' => 'required',
           
            'email' => 'required', 
            'password' => 'required|min:8',
        ]);

        $data = new ModelAdmin();
        $data->nama_admin = $request->nama_admin;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('admin/dataAdmin');
    }
    public  function tampil_data(){
    	$datas = ModelAdmin::all();         
    	return view('admin/dataAdmin',compact('datas'));     

    }

    public function ubah($id_admin) {
        $datas = ModelAdmin::find($id_admin);
        return view('admin/UbahDataAdmin',compact('datas'));
    }

    public function update($id_admin, Request $request) {
        $this->validate($request, [
            'nama_admin' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
            
        ]);

        $data = ModelAdmin::find($id_admin);
        $data->nama_user = $request->nama;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        
        
        $data->save();
        return redirect('admin/dataAdmin');
    }

    public function delete($id_admin) {
        $datas = ModelAdmin::find($id_admin);
        $datas->delete();
        return redirect('admin/dataAdmin');
    }

}
