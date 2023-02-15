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
        Schema::create('gcs', function (Blueprint $table) {
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
            $table->text('lauric_12_0_para')->nullable();
            $table->text('lauric_12_0_method')->nullable();
            $table->text('lauric_12_0_result')->nullable();
            $table->text('myristic_14_0_para')->nullable();
            $table->text('myristic_14_0_method')->nullable();
            $table->text('myristic_14_0_result')->nullable();
            $table->text('myristoleic_14_1_para')->nullable();
            $table->text('myristoleic_14_1_method')->nullable();
            $table->text('myristoleic_14_1_result')->nullable();
            $table->text('palmitic_16_0_para')->nullable();
            $table->text('palmitic_16_0_method')->nullable();
            $table->text('palmitic_16_0_result')->nullable();
            $table->text('palmitoleic_16_1_para')->nullable();
            $table->text('palmitoleic_16_1_method')->nullable();
            $table->text('palmitoleic_16_1_result')->nullable();
            $table->text('stearic_18_0_para')->nullable();
            $table->text('stearic_18_0_method')->nullable();
            $table->text('stearic_18_0_result')->nullable();
            $table->text('oleictrans_18_1_para')->nullable();
            $table->text('oleictrans_18_1_method')->nullable();
            $table->text('oleictrans_18_1_result')->nullable();
            $table->text('oleic_18_1_para')->nullable();
            $table->text('oleic_18_1_method')->nullable();
            $table->text('oleic_18_1_result')->nullable();

            $table->text('linoleictrans_18_2_para')->nullable();
            $table->text('linoleictrans_18_2_method')->nullable();
            $table->text('linoleictrans_18_2_result')->nullable();
            $table->text('linoleic_18_2_para')->nullable();
            $table->text('linoleic_18_2_method')->nullable();
            $table->text('linoleic_18_2_result')->nullable();
            $table->text('linoleic_18_3_para')->nullable();
            $table->text('linoleic_18_3_method')->nullable();
            $table->text('linoleic_18_3_result')->nullable();
            $table->text('arachidic_20_0_para')->nullable();
            $table->text('arachidic_20_0_method')->nullable();
            $table->text('arachidic_20_0_result')->nullable();
            $table->text('paullinic_20_1_para')->nullable();
            $table->text('paullinic_20_1_method')->nullable();
            $table->text('paullinic_20_1_result')->nullable();
            $table->text('arachidonic_20_4_para')->nullable();
            $table->text('arachidonic_20_4_method')->nullable();
            $table->text('arachidonic_20_4_result')->nullable();
            $table->text('bchenic_22_0_para')->nullable();
            $table->text('bchenic_22_0_method')->nullable();
            $table->text('bchenic_22_0_result')->nullable();
            $table->text('erucic_22_1_para')->nullable();
            $table->text('erucic_22_1_method')->nullable();
            $table->text('erucic_22_1_result')->nullable();
            $table->text('lignoceric_24_0_para')->nullable();
            $table->text('lignoceric_24_0_method')->nullable();
            $table->text('lignoceric_24_0_result')->nullable();
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
        Schema::dropIfExists('gcs');
    }
};
