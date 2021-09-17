<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;

    protected $table ="titres";

    protected $fillable = [
        'titre'
    ];

    public function description() {
        return $this -> hasOne(Description::class);
    }

    public function photo() {
        return $this -> hasOne(Photo::class);
    }
}
