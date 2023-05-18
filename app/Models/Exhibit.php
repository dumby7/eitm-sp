<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_name',
        'picture_name',
        'picture_description',
        'date_created',
        'date_modified',
        'title',
        'description',
    ];
}
