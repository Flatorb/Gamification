<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Points;

use Flatorb\Gamification\Models\Achievement;
use Flatorb\Gamification\Models\AchievementType;
use Flatorb\Gamification\Models\User;

class Gamification
{
    public static function achievementTypes()
    {
        return AchievementType::get();
    }

    public static function createAchievement($name, $type_id, $goal, $goal_value, $icon = null)
    {
        $response = Achievement::create([
            'name' => $name,
            'type_id' => $type_id,
            'goal' => $goal,
            'goal_value' => $goal_value,
            'icon' => $icon
        ]);

        return $response;
    }

    public static function getAchievements()
    {
        return Achievement::get();
    }

    public static function givePoints($user_id, $points, $description = null)
    {
        return Points::givePoints($user_id, $points, $description);
    }

    public static function users()
    {
        return User::with(['points', 'badges'])->get();
    }
}
