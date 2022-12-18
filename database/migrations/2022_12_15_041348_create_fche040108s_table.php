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
        Schema::create('fche040108s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('temperature')->nullable();
            $table->text('temperature_test1')->nullable();
            $table->text('temperature_test2')->nullable();
            $table->text('container')->nullable();
            $table->text('container_test1')->nullable();
            $table->text('container_test2')->nullable();
            $table->text('container_water')->nullable();
            $table->text('container_water_test1')->nullable();
            $table->text('container_water_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('container_sample')->nullable();
            $table->text('container_sample_test1')->nullable();
            $table->text('container_sample_test2')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('gravity_cal')->nullable();
            $table->text('gravity_cal_test1')->nullable();
            $table->text('gravity_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('gravity')->nullable();
            $table->text('gravity_test1')->nullable();
            $table->text('gravity_test2')->nullable();
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
        Schema::dropIfExists('fche040108s');
    }
};
