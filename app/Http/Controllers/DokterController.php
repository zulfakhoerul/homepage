<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Dokter;
class DokterController extends Controller
{
 public function index()
 {
 $datas = Dokter::get();
 return view('dokter',compact('datas'));
 }
 public function create()
 {
 return view('tambah');
 }
 public function store(Request $request)
 {
 Dokter::create([
 'nama_dokter' => $request->input('nama_dokter'),
 'bagian' => $request->input('bagian'),
 ]);
 return redirect()->route('dokter');
 }
 public function edit($id_dokter)
 {
 $data = Dokter::findOrFail($id_dokter);
 return view('edit',compact('data'));
 }
 public function update(Request $request, $id_dokter)
 {
 $data = Dokter::findOrFail($id_dokter);
 $data->nama_dokter = $request->input('nama_dokter');
 $data->bagian = $request->input('bagian');
 $data->update();
 return redirect()->to('dokter');
 }
 public function destroy($id_dokter)
 {
 $hapus = Dokter::findOrFail($id_dokter);
 $hapus->delete();
 return redirect()->to('/dokter');
 }
}