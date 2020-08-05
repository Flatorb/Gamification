<?php

namespace Flatorb\Gamification;

use Flatorb\Gamification\Models\User;

class Gamification
{
    public function greet()
    {
        $user = User::first();

        return "{$user->name} - Hello World - {$user->dummy}";
    }
}
