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
        Schema::create('fche040061s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('product_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('chlorine')->nullable();
            $table->text('chlorine_test1')->nullable();
            $table->text('chlorine_test2')->nullable();
            $table->text('volume')->nullable();
            $table->text('volume_test1')->nullable();
            $table->text('volume_test2')->nullable();
            $table->text('dilution')->nullable();
            $table->text('dilution_test1')->nullable();
            $table->text('dilution_test2')->nullable();
            $table->text('pillow')->nullable();
            $table->text('pillow_test1')->nullable();
            $table->text('pillow_test2')->nullable();
            $table->text('reaction_time')->nullable();
            $table->text('reaction_time_test1')->nullable();
            $table->text('reaction_time_test2')->nullable();
            $table->text('blank')->nullable();
            $table->text('blank_test1')->nullable();
            $table->text('blank_test2')->nullable();
            $table->text('reading')->nullable();
            $table->text('reading_test1')->nullable();
            $table->text('reading_test2')->nullable();
            $table->text('chlorine_cal')->nullable();
            $table->text('chlorine_cal_test1')->nullable();
            $table->text('chlorine_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
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
        Schema::dropIfExists('fche040061s');
    }
};
