<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dota extends Model
{
    //kasih tau nama tabel
    protected $table = 'dota';

    //laravel default id
    protected $primaryKey = 'id';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'id',
        'itemname',
        'price',
        'image',
        'seller',
        'phone'
    ];

}
