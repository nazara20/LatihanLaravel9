<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "categories";
   public function books() {
        return $this->hasOne(Books::class);
    }

    public function bukumany() {
        return $this->hasMany(Books::class);
    }
}
