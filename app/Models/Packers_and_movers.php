<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packers_and_movers extends Model
{
    public $table = "book_packers_and_movers";
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "address",
        "postal_code",
        "city",
        "province",
        "phNo",
        "destinationAddress",
        "date",
        "time"
    ];
}
