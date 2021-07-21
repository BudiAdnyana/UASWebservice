<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    //mendaftarkan nama kolom yg bisa diisi
    protected $fillable = ['nama', 'alamat', 'no_tlpn', 'e-mail', 'ticket_id'];
    //relasi
    public function Ticket()
    {
    	return $this->belongsTO(Ticket::class);
    }

}
