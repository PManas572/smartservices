<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grass_cutting extends Model
{
    public $table = "book_grass_cutting";
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "address",
        "postal_code",
        "city",
        "province",
        "phNo",
        "date",
        "time"
    ];
}
