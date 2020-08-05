<?php

namespace Flatorb\Gamification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Point extends Model
{
    use SoftDeletes;

    protected $table = 'gamification_points';

    protected $fillable =['points', 'description'];

    public function getDummyAttribute()
    {
        return 'Dummy';
    }

    public function points()
    {
        return $this->hasMany('Flatorb\Gamification\Models\Point', 'user_id', 'id');
    }
}
