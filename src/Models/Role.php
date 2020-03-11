<?php

namespace JMI\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use JMI\Voyager\Facades\Voyager;
use JMI\Voyager\Traits\HasRelationships;

class Role extends Model
{
    use HasRelationships;

    protected $guarded = [];

    public function users()
    {
        $userModel = Voyager::modelClass('User');

        return $this->belongsToMany($userModel, 'user_roles')
                    ->select(app($userModel)->getTable().'.*')
                    ->union($this->hasMany($userModel))->getQuery();
    }

    public function permissions()
    {
        return $this->belongsToMany(Voyager::modelClass('Permission'));
    }
}
