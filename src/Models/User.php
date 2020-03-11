<?php

namespace JMI\Voyager\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use JMI\Voyager\Contracts\User as UserContract;
use JMI\Voyager\Traits\HasRelationships;
use JMI\Voyager\Traits\VoyagerUser;

class User extends Authenticatable implements UserContract
{
    use VoyagerUser,
        HasRelationships;

    protected $guarded = [];

    protected $casts = [
        'settings' => 'array',
    ];

    public function getAvatarAttribute($value)
    {
        if (is_null($value)) {
            return config('voyager.user.default_avatar', 'users/default.png');
        }

        return $value;
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setLocaleAttribute($value)
    {
        $this->attributes['settings'] = collect($this->settings)->merge(['locale' => $value]);
    }

    public function getLocaleAttribute()
    {
        return $this->settings['locale'];
    }
}
