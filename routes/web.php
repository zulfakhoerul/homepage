<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('about', function () {
    return view('about');
});

Route::get('doctor', function () {
    return view('doctor');
});

//------------------Admin------------------
Route::get('admin/dataDokter', function () {
    return view('admin/dataDokter');
});

Route::get('admin/TambahDataDokter', function () {
    return view('admin/TambahDataDokter');
});

Route::get('admin/dataPasien', function () {
    return view('admin/dataPasien');
});

Route::get('login', function () {
    $level = ['Administrator', 'Dokter', 'Petugas Obat'];
    return view('login', compact('level'));
});

Route::get('admin/loginAdmin', function () {
    return view('admin/loginAdmin');
});

Route::get('admin/registerAdmin', function () {
    return view('admin/registerAdmin');
});

//--------------CRUD Data Dokter----------------------

Route::get('admin/dataDokter','dataDokterController@index');
Route::get('admin/dataDokter','dataDokterController@tampil_data');
Route::get('admin/TambahDataDokter','dataDokterController@tambah');
Route::post('AksiTambahDataDokter','dataDokterController@store');
Route::get('admin/UbahDataDokter{id_dokter}','dataDokterController@ubah');
Route::put('AksiUbahDataDokter{id_dokter}','dataDokterController@update');
Route::get('HapusDataDokter{id_dokter}','dataDokterController@delete');



//--------------login dan register admin---------------
Route::get('/admin/DashboardAdmin', 'AdminController@index');
Route::get('/index', 'AdminController@loginAdmin');
Route::post('/loginAdminPost', 'AdminController@loginAdminPost');
Route::get('/registerAdmin', 'AdminController@registerAdmin');
Route::post('/registerAdminPost', 'AdminController@registerAdminPost');
Route::get('/logoutAdmin', 'AdminController@logoutAdmin');

Route::get('admin/index', function () {
    return view('admin/index');
});


Route::get('calender', function () {
    return view('calender');
});

Route::get('chart', function () {
    return view('chart');
});

Route::get('form', function () {
    return view('form');
});

Route::get('map', function () {
    return view('map');
});

Route::get('admin/dataAdmin', function () {
    return view('admin/dataAdmin');
});

//--------------CRUD Data Admin-------------------

Route::get('admin/dataAdmin','dataAdminController@index');
Route::get('admin/dataAdmin','dataAdminController@tampil_data');
Route::get('admin/TambahDataAdmin','dataAdminController@tambah');
Route::post('AksiTambahDataAdmin','dataAdminController@store');
Route::get('UbahDataAdmin{id_admin}','dataAdminController@ubah');
Route::put('AksiUbahDataAdmin{id_admin}','dataAdminController@update');
Route::get('HapusDataAdmin{id_admin}','dataAdminController@delete');


Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::get('dokter', 'DokterController@index')->name('dokter');
Route::get('dokter/tambah', 'DokterController@create');
Route::get('dokter/edit/{id}',
'DokterController@edit');
Route::post('dokter/tambah/proses',
'DokterController@store');
Route::put('dokter/edit/proses/{id}',
'DokterController@update');
Route::delete('dokter/hapus/{id}',
'DokterController@destroy');

/*Route::get('/', 'PagesController@homepage');*/