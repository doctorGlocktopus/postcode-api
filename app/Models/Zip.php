<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zip extends Model {
    use HasFactory;

    public $hidden = ['id', 'created_at', 'updated_at'];
    public $fillable = ['name', 'code'];
}
