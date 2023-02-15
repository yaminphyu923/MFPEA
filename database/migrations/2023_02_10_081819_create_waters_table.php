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
        Schema::create('waters', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('company_name')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('lab_received_date')->nullable();
            $table->text('sample_number')->nullable();
            $table->text('product_name')->nullable();
            $table->text('test_performed_date')->nullable();
            $table->text('test_type')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('results')->nullable();
            $table->text('total_para')->nullable();
            $table->text('total_method')->nullable();
            $table->text('total_result')->nullable();
            $table->text('calcium_para')->nullable();
            $table->text('calcium_method')->nullable();
            $table->text('calcium_result')->nullable();
            $table->text('mag_para')->nullable();
            $table->text('mag_method')->nullable();
            $table->text('mag_result')->nullable();
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
            $table->text('method')->nullable();
            $table->text('sign')->nullable();
            $table->text('date')->nullable();
            $table->text('checked_name')->nullable();
            $table->text('position')->nullable();
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
        Schema::dropIfExists('waters');
    }
};
