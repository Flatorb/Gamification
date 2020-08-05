<?php

namespace Flatorb\Gamification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;

    protected $table = 'gamification_settings';

    protected $fillable =['key', 'value'];
}
