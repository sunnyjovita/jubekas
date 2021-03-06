<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cars extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "cars";
    protected $connection = 'mysql2';

    protected $fillable = ['title', 'brand', 'year', 'distance', 'condition', 'price', 'description', 'image', 'location','categories', 'owner'];
}
