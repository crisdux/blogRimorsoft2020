<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable=[
        "name",
        "slug",
        "body"
    ];

    public function posts()
    {
        return $this->hasMany(Post::class); //una categoria puede tener n cantidad de post
    }
}
