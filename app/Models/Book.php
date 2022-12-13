<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $casts = [
        'generos' => 'array'
    ];

    protected $dates = [
        'publication_date'
    ];

    protected $guarded = [];

    /**  Relacao N para N com utilizadores - leituras */
    public function usersAsReaders(){
        return $this->belongsToMany('App\Models\User');
    }

    /** Relacao N para N com utilizadores - favoritos */
    public function usersAsLovers(){
        return $this->belongsToMany('App\Models\User');
    }
}
