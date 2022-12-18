<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fche040122s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('mgo')->nullable();
            $table->text('mgo_test1')->nullable();
            $table->text('mgo_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('total_weight')->nullable();
            $table->text('total_weight_test1')->nullable();
            $table->text('total_weight_test2')->nullable();
            $table->text('filtrate')->nullable();
            $table->text('filtrate_test1')->nullable();
            $table->text('filtrate_test2')->nullable();
            $table->text('h2s04')->nullable();
            $table->text('h2s04_test1')->nullable();
            $table->text('h2s04_test2')->nullable();
            $table->text('chlo')->nullable();
            $table->text('chlo_test1')->nullable();
            $table->text('chlo_test2')->nullable();
            $table->text('koh')->nullable();
            $table->text('koh_test1')->nullable();
            $table->text('koh_test2')->nullable();
            $table->text('digestion')->nullable();
            $table->text('digestion_test1')->nullable();
            $table->text('digestion_test2')->nullable();
            $table->text('titer')->nullable();
            $table->text('titer_test1')->nullable();
            $table->text('titer_test2')->nullable();
            $table->text('k')->nullable();
            $table->text('k_test1')->nullable();
            $table->text('k_test2')->nullable();
            $table->text('wt')->nullable();
            $table->text('wt_test1')->nullable();
            $table->text('wt_test2')->nullable();
            $table->text('coefficient')->nullable();
            $table->text('coefficient_test1')->nullable();
            $table->text('coefficient_test2')->nullable();
            $table->text('caffeine_cal')->nullable();
            $table->text('caffeine_cal_test1')->nullable();
            $table->text('caffeine_cal_test2')->nullable();
            $table->text('caffeine')->nullable();
            $table->text('caffeine_test1')->nullable();
            $table->text('caffeine_test2')->nullable();
            $table->text('analysed_sign')->nullable();
            $table->text('analysed_date')->nullable();
            $table->text('analysed_name')->nullable();
            $table->text('checked_sign')->nullable();
            $table->text('checked_date')->nullable();
            $table->text('checked_name')->nullable();
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
        Schema::dropIfExists('fche040122s');
    }
};
