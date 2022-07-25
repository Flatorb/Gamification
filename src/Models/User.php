<?php

namespace Flatorb\Gamification\Models;

use App\Models\User as LaravelUser;

class User extends LaravelUser
{
    public function badges()
    {
        return $this->belongsToMany('Flatorb\Gamification\Models\Achievement', 'gamification_badge_user', 'user_id','badge_id');
    }

    public function level()
    {
        return $this->belongsTo('Flatorb\Gamification\Models\Achievement', 'membership_level_id', 'id');
    }

    public function points()
    {
        return $this->hasMany('Flatorb\Gamification\Models\Point', 'user_id', 'id');
    }
}
