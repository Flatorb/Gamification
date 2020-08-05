<?php

namespace Flatorb\Gamification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AchievementType extends Model
{
    use SoftDeletes;

    protected $table = 'gamification_achievement_types';

    protected $fillable =['name', 'description'];
}
