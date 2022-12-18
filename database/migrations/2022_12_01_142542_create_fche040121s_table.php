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
        Schema::create('fche040121s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('v0')->nullable();
            $table->text('v0_test1')->nullable();
            $table->text('v0_test2')->nullable();
            $table->text('v1')->nullable();
            $table->text('v1_test1')->nullable();
            $table->text('v1_test2')->nullable();
            $table->text('mass')->nullable();
            $table->text('mass_test1')->nullable();
            $table->text('mass_test2')->nullable();
            $table->text('sugar_cal')->nullable();
            $table->text('sugar_cal_test1')->nullable();
            $table->text('sugar_cal_test2')->nullable();
            $table->text('sugar')->nullable();
            $table->text('sugar_test1')->nullable();
            $table->text('sugar_test2')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('fche040121s');
    }
};
