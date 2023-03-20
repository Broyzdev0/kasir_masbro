<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
 
    //memproteksi field id
    protected $guarded = ['id'];

    //
    public function users() {
        return $this->hasMany(Users::class);
    }
}
