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
        Schema::create('fche040101s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('air_method')->nullable();
            $table->text('vaccum_method')->nullable();
            $table->text('dish')->nullable();
            $table->text('dish_test1')->nullable();
            $table->text('dish_test2')->nullable();
            $table->text('w1')->nullable();
            $table->text('w1_test1')->nullable();
            $table->text('w1_test2')->nullable();
            $table->text('dishplussample')->nullable();
            $table->text('dishplussample_test1')->nullable();
            $table->text('dishplussample_test2')->nullable();
            $table->text('w2')->nullable();
            $table->text('w2_test1')->nullable();
            $table->text('w2_test2')->nullable();
            $table->text('moisture_cal')->nullable();
            $table->text('moisture_cal_test1')->nullable();
            $table->text('moisture_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('moisture')->nullable();
            $table->text('moisture_test1')->nullable();
            $table->text('moisture_test2')->nullable();
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
        Schema::dropIfExists('fche040101s');
    }
};
