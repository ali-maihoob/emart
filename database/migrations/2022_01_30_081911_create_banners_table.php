<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constants\BannerConstants;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('status',[BannerConstants::STATUS_ACTIVE,BannerConstants::STATUS_INACTIVE])
            ->default(BannerConstants::STATUS_ACTIVE);
            $table->enum('condition', [BannerConstants::CONDITION_BANNER, BannerConstants::CONDITION_PROMO])
            ->default(BannerConstants::CONDITION_BANNER);
            $table->mediumText('description')->nullable();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
