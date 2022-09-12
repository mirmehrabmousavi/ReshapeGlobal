<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','desc','title_fa','desc_fa','image'];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
