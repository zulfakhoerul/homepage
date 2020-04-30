<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    protected $table        ='coba'; //nama tabel
    protected $primaryKey   ='id_coba'; //primary key tabel
    protected $fillable     =['jurusan','nama','kelas']; //field tabel
}
