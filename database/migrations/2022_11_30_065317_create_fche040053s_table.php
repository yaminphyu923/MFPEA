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
        Schema::create('fche040053s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('product_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('bod')->nullable();
            $table->text('bod_test1')->nullable();
            $table->text('bod_test2')->nullable();
            $table->text('volume')->nullable();
            $table->text('volume_test1')->nullable();
            $table->text('volume_test2')->nullable();
            $table->text('dilution')->nullable();
            $table->text('dilution_test1')->nullable();
            $table->text('dilution_test2')->nullable();
            $table->text('pillow')->nullable();
            $table->text('pillow_test1')->nullable();
            $table->text('pillow_test2')->nullable();
            $table->text('pellet')->nullable();
            $table->text('pellet_test1')->nullable();
            $table->text('pellet_test2')->nullable();
            $table->text('incubation')->nullable();
            $table->text('incubation_test1')->nullable();
            $table->text('incubation_test2')->nullable();
            $table->text('reading')->nullable();
            $table->text('reading_test1')->nullable();
            $table->text('reading_test2')->nullable();
            $table->text('bod_cal')->nullable();
            $table->text('bod_cal_test1')->nullable();
            $table->text('bod_cal_test2')->nullable();
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
        Schema::dropIfExists('fche040053s');
    }
};
