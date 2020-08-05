<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Models\Achievement;
use Flatorb\Gamification\Models\AchievementType;

class Gamification
{
    public static function achievementTypes()
    {
        return AchievementType::get();
    }

    public static function getAchievements()
    {
        return Achievement::get();
    }
}
