<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider2 extends Model
{
    use HasFactory;
    protected $fillable =[
        "subject",
        "date",
        "time",
        "description",
        "status"
    ];
}
