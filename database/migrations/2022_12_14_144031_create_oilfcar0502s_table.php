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
        Schema::create('oilfcar0502s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('report_no')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('analysis_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('result')->nullable();
            $table->text('gravity_para')->nullable();
            $table->text('gravity_method')->nullable();
            $table->text('gravity_result')->nullable();
            $table->text('index_para')->nullable();
            $table->text('index_method')->nullable();
            $table->text('index_result')->nullable();
            $table->text('sap_para')->nullable();
            $table->text('sap_method')->nullable();
            $table->text('sap_result')->nullable();
            $table->text('unsap_para')->nullable();
            $table->text('unsap_method')->nullable();
            $table->text('unsap_result')->nullable();
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
        Schema::dropIfExists('oilfcar0502s');
    }
};
