<?php

namespace App\Http\Controllers;

//use App\ModelAdmin;
use App\ModelDataDokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dataDokterController extends Controller
{
    public function index(){
    	
    	if(!Session::get('login')){
    		return redirect('admin.LoginAdmin')->with('alert','Maaf Anda Harus Login');
    	} else {
    		return view('admin.dataDokter');
    	}
    }

    public function tambah() {
        return view('admin.TambahDataDokter');
    }

    public function store( Request $request) {
        $this->validate($request, [
            'foto' => 'required',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required', 
            'alamat' => 'required',
            'email' => 'required', 
            
            'password' => 'required|min:8'
            
            
        ]);

        $data = new ModelDataDokter();
        $data->foto = $request->foto;
        $data->nama_dokter = $request->nama_dokter;
        $data->spesialis = $request->spesialis;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        
        $data->password = bcrypt($request->password);
        
        
        $data->save();
        return redirect('/admin/dataDokter');
    }
    public  function tampil_data(){
    	$datas = ModelDataDokter::all();         
    	return view('admin/dataDokter',compact('datas'));     

    }

   public function ubah($id_dokter) {
        $datas = ModelDataDokter::find($id_dokter);
        return view('admin/UbahDataDokter',compact('datas'));
    }

    public function update($id_dokter, Request $request) {
        $this->validate($request, [
            'foto' => 'required',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required', 
            'alamat' => 'required',
            'email' => 'required', 
            
            'password' => 'required|min:8'
        ]);

        $data = ModelDataDokter::find($id_dokter);
        $data->foto = $request->foto;
        $data->nama_dokter = $request->nama_dokter;
        $data->spesialis = $request->spesialis;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('admin/dataDokter');
    }

    public function delete($id_dokter) {
        $datas = ModelDataDokter::find($id_dokter);
        $datas->delete();
        return redirect('/admin/dataDokter');
    }

}
