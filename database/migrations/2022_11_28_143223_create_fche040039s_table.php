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
        Schema::create('fche040039s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('ki')->nullable();
            $table->text('ki_test1')->nullable();
            $table->text('ki_test2')->nullable();
            $table->text('distilled_water')->nullable();
            $table->text('distilled_water_test1')->nullable();
            $table->text('distilled_water_test2')->nullable();
            $table->text('acetic_acid')->nullable();
            $table->text('acetic_acid_test1')->nullable();
            $table->text('acetic_acid_test2')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('titration')->nullable();
            $table->text('titration_test1')->nullable();
            $table->text('titration_test2')->nullable();
            $table->text('blank')->nullable();
            $table->text('blank_test1')->nullable();
            $table->text('blank_test2')->nullable();
            $table->text('sodium')->nullable();
            $table->text('sodium_test1')->nullable();
            $table->text('sodium_test2')->nullable();
            $table->text('cl_cal')->nullable();
            $table->text('cl_cal_test1')->nullable();
            $table->text('cl_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('cl')->nullable();
            $table->text('cl_test1')->nullable();
            $table->text('cl_test2')->nullable();
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
        Schema::dropIfExists('fche040039s');
    }
};
