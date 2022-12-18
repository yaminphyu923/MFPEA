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
        Schema::create('fche040110s', function (Blueprint $table) {
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
            $table->text('koh')->nullable();
            $table->text('koh_test1')->nullable();
            $table->text('koh_test2')->nullable();
            $table->text('hcl_sample')->nullable();
            $table->text('hcl_sample_test1')->nullable();
            $table->text('hcl_sample_test2')->nullable();
            $table->text('hcl_blank')->nullable();
            $table->text('hcl_blank_test1')->nullable();
            $table->text('hcl_blank_test2')->nullable();
            $table->text('hcl')->nullable();
            $table->text('hcl_test1')->nullable();
            $table->text('hcl_test2')->nullable();
            $table->text('sap_cal')->nullable();
            $table->text('sap_cal_test1')->nullable();
            $table->text('sap_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('sap')->nullable();
            $table->text('sap_test1')->nullable();
            $table->text('sap_test2')->nullable();
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
        Schema::dropIfExists('fche040110s');
    }
};
