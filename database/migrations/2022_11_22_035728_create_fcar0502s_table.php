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
        Schema::create('fcar0502s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('report_no')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('analysis_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('results')->nullable();
            $table->text('moisture')->nullable();
            $table->text('moisture_ref')->nullable();
            $table->text('moisture_result_g')->nullable();
            $table->text('moisture_result_ml')->nullable();
            $table->text('ash')->nullable();
            $table->text('ash_ref')->nullable();
            $table->text('ash_result_g')->nullable();
            $table->text('ash_result_ml')->nullable();
            $table->text('protein')->nullable();
            $table->text('protein_ref')->nullable();
            $table->text('protein_result_g')->nullable();
            $table->text('protein_result_ml')->nullable();
            $table->text('fiber')->nullable();
            $table->text('fiber_ref')->nullable();
            $table->text('fiber_result_g')->nullable();
            $table->text('fiber_result_ml')->nullable();
            $table->text('fat')->nullable();
            $table->text('fat_ref')->nullable();
            $table->text('fat_result_g')->nullable();
            $table->text('fat_result_ml')->nullable();
            $table->text('carbo')->nullable();
            $table->text('carbo_ref')->nullable();
            $table->text('carbo_result_g')->nullable();
            $table->text('carbo_result_ml')->nullable();
            $table->text('energy')->nullable();
            $table->text('energy_ref')->nullable();
            $table->text('energy_result_g')->nullable();
            $table->text('energy_result_ml')->nullable();
            $table->text('na')->nullable();
            $table->text('na_ref')->nullable();
            $table->text('na_result_g')->nullable();
            $table->text('na_result_ml')->nullable();
            $table->text('remark')->nullable();
            $table->text('sign')->nullable();
            $table->text('name')->nullable();
            $table->text('position')->nullable();
            $table->text('check1')->nullable();
            $table->text('check2')->nullable();
            $table->text('one_package')->nullable();
            $table->text('energy_fact')->nullable();
            $table->text('protein_fact')->nullable();
            $table->text('fat_fact')->nullable();
            $table->text('carbo_fact')->nullable();
            $table->text('na_fact')->nullable();
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
        Schema::dropIfExists('fcar0502s');
    }
};
