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
        Schema::create('fche040059s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('product_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('lead_range')->nullable();
            $table->text('lead_range_test1')->nullable();
            $table->text('lead_range_test2')->nullable();
            $table->text('volume')->nullable();
            $table->text('volume_test1')->nullable();
            $table->text('volume_test2')->nullable();
            $table->text('dilution')->nullable();
            $table->text('dilution_test1')->nullable();
            $table->text('dilution_test2')->nullable();
            $table->text('reagenta')->nullable();
            $table->text('reagenta_test1')->nullable();
            $table->text('reagenta_test2')->nullable();
            $table->text('reaction_time')->nullable();
            $table->text('reaction_time_test1')->nullable();
            $table->text('reaction_time_test2')->nullable();
            $table->text('solutionb')->nullable();
            $table->text('solutionb_test1')->nullable();
            $table->text('solutionb_test2')->nullable();
            $table->text('treated')->nullable();
            $table->text('treated_test1')->nullable();
            $table->text('treated_test2')->nullable();
            $table->text('reaction_time2')->nullable();
            $table->text('reaction_time2_test1')->nullable();
            $table->text('reaction_time2_test2')->nullable();
            $table->text('read')->nullable();
            $table->text('read_test1')->nullable();
            $table->text('read_test2')->nullable();
            $table->text('solutionc')->nullable();
            $table->text('solutionc_test1')->nullable();
            $table->text('solutionc_test2')->nullable();
            $table->text('reaction_time3')->nullable();
            $table->text('reaction_time3_test1')->nullable();
            $table->text('reaction_time3_test2')->nullable();
            $table->text('reading')->nullable();
            $table->text('reading_test1')->nullable();
            $table->text('reading_test2')->nullable();
            $table->text('lead')->nullable();
            $table->text('lead_test1')->nullable();
            $table->text('lead_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
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
        Schema::dropIfExists('fche040059s');
    }
};
