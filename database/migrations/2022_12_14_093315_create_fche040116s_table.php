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
        Schema::create('fche040116s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('distilled')->nullable();
            $table->text('distilled_test1')->nullable();
            $table->text('distilled_test2')->nullable();
            $table->text('buffer')->nullable();
            $table->text('buffer_test1')->nullable();
            $table->text('buffer_test2')->nullable();
            $table->text('indicator')->nullable();
            $table->text('indicator_test1')->nullable();
            $table->text('indicator_test2')->nullable();
            $table->text('t')->nullable();
            $table->text('t_test1')->nullable();
            $table->text('t_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('edta')->nullable();
            $table->text('edta_test1')->nullable();
            $table->text('edta_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('hardness')->nullable();
            $table->text('hardness_test1')->nullable();
            $table->text('hardness_test2')->nullable();
            $table->text('ca')->nullable();
            $table->text('ca_test1')->nullable();
            $table->text('ca_test2')->nullable();
            $table->text('mg')->nullable();
            $table->text('mg_test1')->nullable();
            $table->text('mg_test2')->nullable();
            $table->text('analysed_sign')->nullable();
            $table->text('analysed_date')->nullable();
            $table->text('analysed_name')->nullable();
            $table->text('checked_sign')->nullable();
            $table->text('checked_date')->nullable();
            $table->text('checked_name')->nullable();
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
        Schema::dropIfExists('fche040116s');
    }
};
