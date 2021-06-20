<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electronic extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "electronic";
    protected $connection = 'mysql2';

    protected $fillable = ['title', 'type', 'brand', 'condition', 'price', 'description', 'image', 'location','categories'];
}
