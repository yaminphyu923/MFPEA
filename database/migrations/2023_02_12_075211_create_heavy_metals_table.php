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
        Schema::create('heavy_metals', function (Blueprint $table) {
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
            $table->text('as_para')->nullable();
            $table->text('as_method')->nullable();
            $table->text('as_result')->nullable();
            $table->text('as_unit')->nullable();
            $table->text('as_limit')->nullable();
            $table->text('pb_para')->nullable();
            $table->text('pb_method')->nullable();
            $table->text('pb_result')->nullable();
            $table->text('pb_unit')->nullable();
            $table->text('pb_limit')->nullable();
            $table->text('cu_para')->nullable();
            $table->text('cu_method')->nullable();
            $table->text('cu_result')->nullable();
            $table->text('cu_unit')->nullable();
            $table->text('cu_limit')->nullable();
            $table->text('zn_para')->nullable();
            $table->text('zn_method')->nullable();
            $table->text('zn_result')->nullable();
            $table->text('zn_unit')->nullable();
            $table->text('zn_limit')->nullable();
            $table->text('hg_para')->nullable();
            $table->text('hg_method')->nullable();
            $table->text('hg_result')->nullable();
            $table->text('hg_unit')->nullable();
            $table->text('hg_limit')->nullable();
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
        Schema::dropIfExists('heavy_metals');
    }
};
