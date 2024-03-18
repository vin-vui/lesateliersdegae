<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'price',
        'location',
        'location_url',
        'external_url',
        'external_url_title',
        'image',
        'image_alt',
        'is_published',
    ];
}
