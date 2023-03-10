<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pengaduan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $table='pengaduans';

    protected $fillable = [
        'tgl_pengaduan',
        'isi_laporan',
        'status',
        'user_id' 
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    // public function user(){
    //     return $this->hasMany('App\Models\User','user_id');
    // }
}
