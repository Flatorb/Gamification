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
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        \Flatorb\Gamification\Models\AchievementType::insert([
          ['name' => 'Level', 'Description' => 'Ex: Silver member'],
          ['name' => 'Badge', 'Description' => 'Ex: Top Rated Developer'],
          ['name' => 'Reward', 'Description' => 'Ex: $25 gift card'],
          ['name' => 'Discount', 'Description' => 'Ex: $10 or 10% off something']
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
