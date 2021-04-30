<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maid extends Model
{
    public $table = "book_maid";
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "address",
        "postal_code",
        "city",
        "province",
        "phNo",
        "numberOfRooms",
        "date",
        "time"
    ];
}
