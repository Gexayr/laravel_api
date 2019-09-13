<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    protected $fillable = [
        'name',
        'author_id',
    ];

    public function filter($request)
    {
        dd($request->all());
    }
}
