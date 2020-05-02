<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "table_profile";
    protected $fillable = [
        'Nama', 'Agama', 'TTL', 'NoHandphone'
    ];

    protected $hidden = [];
}
