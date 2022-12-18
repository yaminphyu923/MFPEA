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
        Schema::create('wtfcar0502s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('report_no')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('analysis_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('result')->nullable();
            $table->text('total_para')->nullable();
            $table->text('total_method')->nullable();
            $table->text('total_result')->nullable();
            $table->text('calcium_para')->nullable();
            $table->text('calcium_method')->nullable();
            $table->text('calcium_result')->nullable();
            $table->text('magnesium_para')->nullable();
            $table->text('magnesium_method')->nullable();
            $table->text('magnesium_result')->nullable();
            $table->text('solid_para')->nullable();
            $table->text('solid_method')->nullable();
            $table->text('solid_result')->nullable();
            $table->text('dissolved_para')->nullable();
            $table->text('dissolved_method')->nullable();
            $table->text('dissolved_result')->nullable();
            $table->text('suspended_para')->nullable();
            $table->text('suspended_method')->nullable();
            $table->text('suspended_result')->nullable();
            $table->text('ph_para')->nullable();
            $table->text('ph_method')->nullable();
            $table->text('ph_result')->nullable();
            $table->text('conductivity_para')->nullable();
            $table->text('conductivity_method')->nullable();
            $table->text('conductivity_result')->nullable();
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('wtfcar0502s');
    }
};
