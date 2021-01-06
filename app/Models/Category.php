<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'Category_ID';
    public $incrementing = false;

    protected $fillable = ['Category_ID','Category_Name'];
    public $timestamps = false;
}
