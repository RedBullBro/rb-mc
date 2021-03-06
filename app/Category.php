<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'title',
        'url',
        'description',
        'published',
        'parent_id',
        'created_by',
        'modified_by',
    ];

    // Mutators

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
