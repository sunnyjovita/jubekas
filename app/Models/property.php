<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "property";
    protected $connection = 'mysql2';

    protected $fillable = ['title', 'type', 'landSize', 'buildingSize', 'address', 'bedrooms', 'bathrooms', 'year', 'certificate','location', 'description', 'price', 'image', 'categories'];
}
