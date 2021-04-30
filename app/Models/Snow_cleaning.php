<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snow_cleaning extends Model
{
    public $table = "book_snow_cleaning";
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
