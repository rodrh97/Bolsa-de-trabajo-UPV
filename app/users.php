<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'siita_db.users';

    protected $fillable = ['phone','image_url'];
}
