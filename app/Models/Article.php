<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body'];

    public function comments()
    {
        return $this->hasmany(__NAMESPACE__. '\ArticleComment');
    }

    public function isPublished()
    {
        return $this->state == 'published';
    }
}
