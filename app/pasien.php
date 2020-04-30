<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = "pasien";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'umur', 'alamat', 'no_hp', 'agama', 'jenis_kelamin'];
}
?>