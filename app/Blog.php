<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'pt2_blog';
    protected $fillable = ['title', 'meta_desc', 'content', 'post_image', 'isPublish'];
}
