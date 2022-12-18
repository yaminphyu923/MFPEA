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
        Schema::create('fche040038s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('wt')->nullable();
            $table->text('wt_test1')->nullable();
            $table->text('wt_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('blank')->nullable();
            $table->text('blank_test1')->nullable();
            $table->text('blank_test2')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('hcl')->nullable();
            $table->text('hcl_test1')->nullable();
            $table->text('hcl_test2')->nullable();
            $table->text('ash_cal')->nullable();
            $table->text('ash_cal_test1')->nullable();
            $table->text('ash_cal_test2')->nullable();
            $table->text('ash')->nullable();
            $table->text('ash_test1')->nullable();
            $table->text('ash_test2')->nullable();
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
        Schema::dropIfExists('fche040038s');
    }
};
