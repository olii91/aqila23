<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'pengaduan_id',
        'tgl_tanggapan',
        'tanggapam' 
    ];

    public function pengaduan(){
        return $this->belongsTo('App\Models\Pengaduan','pengaduan_id');
    }
}
