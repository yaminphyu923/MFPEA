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
        Schema::create('nutrition_analyses', function (Blueprint $table) {
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
            $table->text('moisture_para')->nullable();
            $table->text('moisture_method')->nullable();
            $table->text('moisture_result')->nullable();
            $table->text('ash_para')->nullable();
            $table->text('ash_method')->nullable();
            $table->text('ash_result')->nullable();
            $table->text('protein_para')->nullable();
            $table->text('protein_method')->nullable();
            $table->text('protein_result')->nullable();
            $table->text('fiber_para')->nullable();
            $table->text('fiber_method')->nullable();
            $table->text('fiber_result')->nullable();
            $table->text('fat_para')->nullable();
            $table->text('fat_method')->nullable();
            $table->text('fat_result')->nullable();
            $table->text('carbo_para')->nullable();
            $table->text('carbo_method')->nullable();
            $table->text('carbo_result')->nullable();
            $table->text('energy_para')->nullable();
            $table->text('energy_method')->nullable();
            $table->text('energy_result')->nullable();
            $table->text('sodium_para')->nullable();
            $table->text('sodium_method')->nullable();
            $table->text('sodium_result')->nullable();
            $table->text('method')->nullable();
            $table->text('sign')->nullable();
            $table->text('checked_name')->nullable();
            $table->text('date')->nullable();
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
        Schema::dropIfExists('nutrition_analyses');
    }
};
