<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $directory = "/images/";
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'path',
    ];

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }
}
