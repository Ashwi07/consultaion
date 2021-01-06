<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'Customer';
    protected $primaryKey = 'Customer_ID';
    public $incrementing = false;

    protected $fillable = [ 'Customer_ID',
                            'Mobile_Num',
                            'Name',
                            'Address',
                            'Landmark',
                            'Distance',
                            'Email_ID',
                            'Contact_Person',
                            'Alt_MobileNum',
                            'Category_ID',
                            'Branch_ID'
                        ];

    public $timestamps = false;
}