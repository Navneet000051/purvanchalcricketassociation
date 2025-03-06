<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'sub_title',
        'category',
        'tag',
        'description',
        'image',
        'meta_key',
        'meta_description',
        'meta_title'
    ];
}
