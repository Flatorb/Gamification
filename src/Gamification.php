<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Models\AchievementType;

class Gamification
{
    public static function achievementTypes()
    {
        return AchievementType::get();
    }
}
