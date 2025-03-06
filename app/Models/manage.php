<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manage extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'mobile',
        'address',
        'mothername',
        'fathername',
        'state',
        'city',
        'adhaar',
        'adhaar_upload',
        'pancard',
        'pancard_upload',
        'pincode',
        'image'
    ];
}
