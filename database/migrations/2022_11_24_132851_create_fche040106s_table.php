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
        Schema::create('fche040106s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('acid_method')->nullable();
            $table->text('alkali_method')->nullable();
            $table->text('sample')->nullable();
            $table->text('sample_test1')->nullable();
            $table->text('sample_test2')->nullable();
            $table->text('h2o')->nullable();
            $table->text('h2o_test1')->nullable();
            $table->text('h2o_test2')->nullable();
            $table->text('nh4oh')->nullable();
            $table->text('nh4oh_test1')->nullable();
            $table->text('nh4oh_test2')->nullable();
            $table->text('alcohol')->nullable();
            $table->text('alcohol_test1')->nullable();
            $table->text('alcohol_test2')->nullable();
            $table->text('first_alcohol')->nullable();
            $table->text('first_alcohol_test1')->nullable();
            $table->text('first_alcohol_test2')->nullable();
            $table->text('hcl')->nullable();
            $table->text('hcl_test1')->nullable();
            $table->text('hcl_test2')->nullable();
            $table->text('second_alcohol')->nullable();
            $table->text('second_alcohol_test1')->nullable();
            $table->text('second_alcohol_test2')->nullable();
            $table->text('residue')->nullable();
            $table->text('residue_test1')->nullable();
            $table->text('residue_test2')->nullable();
            $table->text('fat_cal')->nullable();
            $table->text('fat_cal_test1')->nullable();
            $table->text('fat_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('fat')->nullable();
            $table->text('fat_test1')->nullable();
            $table->text('fat_test2')->nullable();
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
        Schema::dropIfExists('fche040106s');
    }
};
