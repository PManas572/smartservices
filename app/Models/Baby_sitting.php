<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby_sitting extends Model
{
    public $table = "book_baby_sitting";
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
