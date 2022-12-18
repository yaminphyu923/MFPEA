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
        Schema::create('fche040107s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('a')->nullable();
            $table->text('a_test1')->nullable();
            $table->text('a_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('c')->nullable();
            $table->text('c_test1')->nullable();
            $table->text('c_test2')->nullable();
            $table->text('d')->nullable();
            $table->text('d_test1')->nullable();
            $table->text('d_test2')->nullable();
            $table->text('e')->nullable();
            $table->text('e_test1')->nullable();
            $table->text('e_test2')->nullable();
            $table->text('f')->nullable();
            $table->text('f_test1')->nullable();
            $table->text('f_test2')->nullable();
            $table->text('energy_cal')->nullable();
            $table->text('energy_cal_test1')->nullable();
            $table->text('energy_cal_test2')->nullable();
            $table->text('carbo')->nullable();
            $table->text('carbo_test1')->nullable();
            $table->text('carbo_test2')->nullable();
            $table->text('energy')->nullable();
            $table->text('energy_test1')->nullable();
            $table->text('energy_test2')->nullable();
            $table->text('analysed_sign')->nullable();
            $table->text('analysed_date')->nullable();
            $table->text('analysed_name')->nullable();
            $table->text('checked_sign')->nullable();
            $table->text('checked_date')->nullable();
            $table->text('checked_name')->nullable();
            $table->text('one_package')->nullable();
            $table->text('energy_fact')->nullable();
            $table->text('protein_fact')->nullable();
            $table->text('fat_fact')->nullable();
            $table->text('carbo_fact')->nullable();
            $table->text('sodium_fact')->nullable();
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
        Schema::dropIfExists('fche040107s');
    }
};
