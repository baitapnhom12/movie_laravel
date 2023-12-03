<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $fillable = ['name_pro', 'img_pro','slug'];

    protected $table = 'pro';

    protected $primaryKey = 'id_pro';
}
