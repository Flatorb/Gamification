<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamificationAchievementTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamification_achievement_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        \Flatorb\Gamification\Models\AchievementType::insert([
          ['name' => 'Level', 'Description' => 'Ex: Silver member'],
          ['name' => 'Badge', 'Description' => 'Ex: Top Rated Developer'],
          ['name' => 'Reward', 'Description' => 'Ex: $25 gift card']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamification_achievement_types');
    }
}