<?php

namespace Flatorb\Gamification\Models;

use App\User as LaravelUser;

class User extends LaravelUser
{
    public function getDummyAttribute()
    {
        return 'Dummy';
    }

    public function points()
    {
        return $this->hasMany('Flatorb\Gamification\Models\Point', 'user_id', 'id');
    }
}
