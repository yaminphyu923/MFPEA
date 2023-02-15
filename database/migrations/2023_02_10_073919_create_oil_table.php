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
        Schema::create('oil', function (Blueprint $table) {
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
            $table->text('gravity_para')->nullable();
            $table->text('gravity_method')->nullable();
            $table->text('gravity_result')->nullable();
            $table->text('index_para')->nullable();
            $table->text('index_method')->nullable();
            $table->text('index_result')->nullable();
            $table->text('sapo_para')->nullable();
            $table->text('sapo_method')->nullable();
            $table->text('sapo_result')->nullable();
            $table->text('unsapo_para')->nullable();
            $table->text('unsapo_method')->nullable();
            $table->text('unsapo_result')->nullable();
            $table->text('iodine_para')->nullable();
            $table->text('iodine_method')->nullable();
            $table->text('iodine_result')->nullable();
            $table->text('acid_para')->nullable();
            $table->text('acid_method')->nullable();
            $table->text('acid_result')->nullable();
            $table->text('peroxide_para')->nullable();
            $table->text('peroxide_method')->nullable();
            $table->text('peroxide_result')->nullable();
            $table->text('moisture_para')->nullable();
            $table->text('moisture_method')->nullable();
            $table->text('moisture_result')->nullable();
            $table->text('method')->nullable();
            $table->text('sign')->nullable();
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
        Schema::dropIfExists('oil');
    }
};
