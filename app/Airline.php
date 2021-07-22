<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{

    //protected $table = 'nama_tabel'; untuk nama tabel yg beda dengan model
    //protected $primaryKey = 'nama_primarykey'; untuk primerykey yg beda 


    //mendaftarkan nama kolom yg bisa diisi
    protected $fillable = ['nama', 'alamat', 'no_tlpn', 'e-mail', 'ticket_id'];
    //relasi
    public function Ticket()
    {
    	return $this->belongsTO(Ticket::class);
        //kalau beda foeign key nya
    	//return $this->belongsTO(Category::class, 'category_id');
    }

}
