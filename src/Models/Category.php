<?php

namespace JMI\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use JMI\Voyager\Facades\Voyager;
use JMI\Voyager\Traits\HasRelationships;
use JMI\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable,
        HasRelationships;

    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
