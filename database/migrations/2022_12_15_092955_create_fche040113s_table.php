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
        Schema::create('fche040113s', function (Blueprint $table) {
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
            $table->text('alcohol')->nullable();
            $table->text('alcohol_test1')->nullable();
            $table->text('alcohol_test2')->nullable();
            $table->text('s')->nullable();
            $table->text('s_test1')->nullable();
            $table->text('s_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('n')->nullable();
            $table->text('n_test1')->nullable();
            $table->text('n_test2')->nullable();
            $table->text('acid_cal')->nullable();
            $table->text('acid_cal_test1')->nullable();
            $table->text('acid_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('acid')->nullable();
            $table->text('acid_test1')->nullable();
            $table->text('acid_test2')->nullable();
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
        Schema::dropIfExists('fche040113s');
    }
};
