<?php

namespace Flatorb\Gamification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use SoftDeletes;

    protected $table = 'gamification_achievements';

    protected $fillable =['name', 'type_id', 'goal', 'goal_value', 'icon', 'meta'];
}
