<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table        ='dokter'; //nama tabel
    protected $primaryKey   ='id_dokter'; //primary key tabel
    protected $fillable     =['nama_dokter','bagian']; //field tabel
}
