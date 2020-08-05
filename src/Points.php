<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Models\User;

class Points
{
    public static function givePoints($user_id, $points, $description = null)
    {
        $user = User::findOrFail($user_id);

        $response = $user->points()->create([
            'points' => $points,
            'description' => $description
        ]);

        return $response;
    }
}
