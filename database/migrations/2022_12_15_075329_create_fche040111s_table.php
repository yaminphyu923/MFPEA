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
        Schema::create('fche040111s', function (Blueprint $table) {
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
            $table->text('koh')->nullable();
            $table->text('koh_test1')->nullable();
            $table->text('koh_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('petro')->nullable();
            $table->text('petro_test1')->nullable();
            $table->text('petro_test2')->nullable();
            $table->text('ethanol')->nullable();
            $table->text('ethanol_test1')->nullable();
            $table->text('ethanol_test2')->nullable();
            $table->text('flask')->nullable();
            $table->text('flask_test1')->nullable();
            $table->text('flask_test2')->nullable();
            $table->text('flask_residue')->nullable();
            $table->text('flask_residue_test1')->nullable();
            $table->text('flask_residue_test2')->nullable();
            $table->text('residue')->nullable();
            $table->text('residue_test1')->nullable();
            $table->text('residue_test2')->nullable();
            $table->text('unsap_cal')->nullable();
            $table->text('unsap_cal_test1')->nullable();
            $table->text('unsap_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('unsap')->nullable();
            $table->text('unsap_test1')->nullable();
            $table->text('unsap_test2')->nullable();
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
        Schema::dropIfExists('fche040111s');
    }
};
