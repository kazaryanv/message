<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkGenerate extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'reading',
        'email',
        'password',
        'link_name',
        'created_at',
        'updated_at',
    ];
}
