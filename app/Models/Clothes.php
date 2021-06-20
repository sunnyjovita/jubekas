<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "clothes";
    protected $connection = 'mysql2';

    protected $fillable = ['title', 'type', 'condition', 'price', 'description', 'location', 'image', 'categories', 'owner'];
}
