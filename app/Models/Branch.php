<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branch';
    protected $primaryKey = 'Branch_ID';
    public $incrementing = false;

    protected $fillable = ['Branch_ID','Branch_Name'];
    public $timestamps = false;
}
