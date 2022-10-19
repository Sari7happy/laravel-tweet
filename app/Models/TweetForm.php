<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];
}
