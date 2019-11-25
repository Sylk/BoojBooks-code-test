<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\Tags\HasTags;

class Book extends Model
{
    use HasTags;

    protected $fillable = ['title', 'author', 'edition', 'length', 'score', 'cover', 'file', 'published_date'];
    public $timestamps = false;

    public function collections()
    {
        return $this->belongsToMany('App\Collection', 'book_collection');
    }
}
