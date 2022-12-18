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
        Schema::create('fche040103s', function (Blueprint $table) {
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
            $table->text('cat')->nullable();
            $table->text('cat_test1')->nullable();
            $table->text('cat_test2')->nullable();
            $table->text('h2so4')->nullable();
            $table->text('h2so4_test1')->nullable();
            $table->text('h2so4_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('naoh')->nullable();
            $table->text('naoh_test1')->nullable();
            $table->text('naoh_test2')->nullable();
            $table->text('receiver')->nullable();
            $table->text('receiver_test1')->nullable();
            $table->text('receiver_test2')->nullable();
            $table->text('n')->nullable();
            $table->text('n_test1')->nullable();
            $table->text('n_test2')->nullable();
            $table->text('t')->nullable();
            $table->text('t_test1')->nullable();
            $table->text('t_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('f')->nullable();
            $table->text('f_test1')->nullable();
            $table->text('f_test2')->nullable();
            $table->text('nitrogen_cal')->nullable();
            $table->text('nitrogen_cal_test1')->nullable();
            $table->text('nitrogen_cal_test2')->nullable();
            $table->text('protein_cal')->nullable();
            $table->text('protein_cal_test1')->nullable();
            $table->text('protein_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('nitrogen')->nullable();
            $table->text('nitrogen_test1')->nullable();
            $table->text('nitrogen_test2')->nullable();
            $table->text('protein')->nullable();
            $table->text('protein_test1')->nullable();
            $table->text('protein_test2')->nullable();
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
        Schema::dropIfExists('fche040103s');
    }
};
