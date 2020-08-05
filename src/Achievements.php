<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Models\Achievement;

class Achievements
{
    public static function create($name, $type_id, $goal, $goal_value, $icon = null, $meta = null)
    {
        $response = Achievement::create([
            'name' => $name,
            'type_id' => $type_id,
            'goal' => $goal,
            'goal_value' => $goal_value,
            'icon' => $icon,
            'meta' => $meta
        ]);

        return $response;
    }
}
