<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = [
        'id','id_user','tanggal','jam','suhu_tubuh','lokasi'
    ];
    protected $primaryKey = 'id';

    public function User()
    {
        return $this->belongsTo('App\User','id_user','id');
    }
}
