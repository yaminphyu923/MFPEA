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
        Schema::create('alcohol_fcar0501s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('report_no')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('analysis_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('result')->nullable();
            $table->text('ace_para')->nullable();
            $table->text('ace_method')->nullable();
            $table->text('ace_result')->nullable();
            $table->text('ethyl_para')->nullable();
            $table->text('ethyl_method')->nullable();
            $table->text('ethyl_result')->nullable();
            $table->text('methanol_para')->nullable();
            $table->text('methanol_method')->nullable();
            $table->text('methanol_result')->nullable();
            $table->text('propanol_para')->nullable();
            $table->text('propanol_method')->nullable();
            $table->text('propanol_result')->nullable();
            $table->text('iso_para')->nullable();
            $table->text('iso_method')->nullable();
            $table->text('iso_result')->nullable();
            $table->text('methyl_para')->nullable();
            $table->text('methyl_method')->nullable();
            $table->text('methyl_result')->nullable();
            $table->text('sign')->nullable();
            $table->text('name')->nullable();
            $table->text('position')->nullable();
            $table->text('check1')->nullable();
            $table->text('check2')->nullable();
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
        Schema::dropIfExists('alcohol_fcar0501s');
    }
};
