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
        Schema::create('fche040102s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('cru')->nullable();
            $table->text('cru_test1')->nullable();
            $table->text('cru_test2')->nullable();
            $table->text('w1')->nullable();
            $table->text('w1_test1')->nullable();
            $table->text('w1_test2')->nullable();
            $table->text('cruplussample')->nullable();
            $table->text('cruplussample_test1')->nullable();
            $table->text('cruplussample_test2')->nullable();
            $table->text('w2')->nullable();
            $table->text('w2_test1')->nullable();
            $table->text('w2_test2')->nullable();
            $table->text('ash_cal')->nullable();
            $table->text('ash_cal_test1')->nullable();
            $table->text('ash_cal_test2')->nullable();
            $table->text('result')->nullable();
            $table->text('result_test1')->nullable();
            $table->text('result_test2')->nullable();
            $table->text('ash')->nullable();
            $table->text('ash_test1')->nullable();
            $table->text('ash_test2')->nullable();
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
        Schema::dropIfExists('fche040102s');
    }
};
