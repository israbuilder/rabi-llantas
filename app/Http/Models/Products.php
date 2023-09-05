<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'llantas';
    protected $hiden = ['created_at','updated_at'];
}
