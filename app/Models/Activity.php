<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Activity extends Model
{
    use HasFactory, HasTranslations;


    public $translatable = ['name', 'description'];


    protected $fillable = [
        'name',
        'description',
        'identifier',
    ];
}
