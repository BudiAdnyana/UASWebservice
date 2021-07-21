<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //mendaftarkan nama kolom yg bisa diisi
    protected $fillable = ['kelas', 'sub_kelas', 'harga', 'berlaku', 'desc'];
}
