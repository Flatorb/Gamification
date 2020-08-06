<?php

namespace Flatorb\Gamification\Models;

use App\User as LaravelUser;

class User extends LaravelUser
{
    public function badges()
    {
        return $this->belongsToMany('Flatorb\Gamification\Models\Achievement', 'gamification_badge_user');
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
