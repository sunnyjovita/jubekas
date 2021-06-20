<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "furniture";
    protected $connection = 'mysql2';

    protected $fillable = ['title', 'type', 'condition', 'price', 'description', 'location', 'image', 'owner','categories'];
}
