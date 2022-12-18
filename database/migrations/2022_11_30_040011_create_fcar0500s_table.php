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
        Schema::create('fcar0500s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('report_no')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('analysis_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('result')->nullable();
            $table->text('bod_para')->nullable();
            $table->text('bod_method')->nullable();
            $table->text('bod_result')->nullable();
            $table->text('bod_unit')->nullable();
            $table->text('bod_value')->nullable();
            $table->text('cod_para')->nullable();
            $table->text('cod_method')->nullable();
            $table->text('cod_result')->nullable();
            $table->text('cod_unit')->nullable();
            $table->text('cod_value')->nullable();
            $table->text('oil_para')->nullable();
            $table->text('oil_method')->nullable();
            $table->text('oil_result')->nullable();
            $table->text('oil_unit')->nullable();
            $table->text('oil_value')->nullable();
            $table->text('ph_para')->nullable();
            $table->text('ph_method')->nullable();
            $table->text('ph_result')->nullable();
            $table->text('ph_unit')->nullable();
            $table->text('ph_value')->nullable();
            $table->text('nitrogen_para')->nullable();
            $table->text('nitrogen_method')->nullable();
            $table->text('nitrogen_result')->nullable();
            $table->text('nitrogen_unit')->nullable();
            $table->text('nitrogen_value')->nullable();
            $table->text('phos_para')->nullable();
            $table->text('phos_method')->nullable();
            $table->text('phos_result')->nullable();
            $table->text('phos_unit')->nullable();
            $table->text('phos_value')->nullable();
            $table->text('solid_para')->nullable();
            $table->text('solid_method')->nullable();
            $table->text('solid_result')->nullable();
            $table->text('solid_unit')->nullable();
            $table->text('solid_value')->nullable();
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
        Schema::dropIfExists('fcar0500s');
    }
};
