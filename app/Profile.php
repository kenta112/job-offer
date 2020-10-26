<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'employment', 'language', 'location','birthday','icon','image','appeal','future'
    ];
}
