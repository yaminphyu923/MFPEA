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
        Schema::create('fche040117s', function (Blueprint $table) {
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
            $table->text('a')->nullable();
            $table->text('a_test1')->nullable();
            $table->text('a_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('total_cal')->nullable();
            $table->text('total_cal_test1')->nullable();
            $table->text('total_cal_test2')->nullable();
            $table->text('dissolved_cal')->nullable();
            $table->text('dissolved_cal_test1')->nullable();
            $table->text('dissolved_cal_test2')->nullable();
            $table->text('suspended_cal')->nullable();
            $table->text('suspended_cal_test1')->nullable();
            $table->text('suspended_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('total')->nullable();
            $table->text('total_test1')->nullable();
            $table->text('total_test2')->nullable();
            $table->text('dissolved')->nullable();
            $table->text('dissolved_test1')->nullable();
            $table->text('dissolved_test2')->nullable();
            $table->text('suspended')->nullable();
            $table->text('suspended_test1')->nullable();
            $table->text('suspended_test2')->nullable();
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
        Schema::dropIfExists('fche040117s');
    }
};
