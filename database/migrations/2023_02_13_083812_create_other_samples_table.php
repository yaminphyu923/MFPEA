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
        Schema::create('other_samples', function (Blueprint $table) {
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
            $table->text('apc_para')->nullable();
            $table->text('apc_method')->nullable();
            $table->text('apc_result')->nullable();
            $table->text('apc_before')->nullable();
            $table->text('apc_after')->nullable();
            $table->text('coliform_para')->nullable();
            $table->text('coliform_method')->nullable();
            $table->text('coliform_result')->nullable();
            $table->text('coliform_before')->nullable();
            $table->text('coliform_after')->nullable();
            $table->text('coli_para')->nullable();
            $table->text('coli_method')->nullable();
            $table->text('coli_result')->nullable();
            $table->text('coli_before')->nullable();
            $table->text('coli_after')->nullable();
            $table->text('staphy_para')->nullable();
            $table->text('staphy_method')->nullable();
            $table->text('staphy_result')->nullable();
            $table->text('staphy_before')->nullable();
            $table->text('staphy_after')->nullable();
            $table->text('salmo_para')->nullable();
            $table->text('salmo_method')->nullable();
            $table->text('salmo_result')->nullable();
            $table->text('salmo_before')->nullable();
            $table->text('salmo_after')->nullable();
            $table->text('yeast_mould_para')->nullable();
            $table->text('yeast_mould_method')->nullable();
            $table->text('yeast_mould_result')->nullable();
            $table->text('yeast_mould_before')->nullable();
            $table->text('yeast_mould_after')->nullable();
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
        Schema::dropIfExists('other_samples');
    }
};
