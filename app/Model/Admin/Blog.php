<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title','body','image'
    ];
}
