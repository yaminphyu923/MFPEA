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
        Schema::create('fche040124s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('sample')->nullable();
            $table->text('water')->nullable();
            $table->text('filtrate')->nullable();
            $table->text('filtrate_test1')->nullable();
            $table->text('filtrate_test2')->nullable();
            $table->text('naoh')->nullable();
            $table->text('naoh_test1')->nullable();
            $table->text('naoh_test2')->nullable();
            $table->text('titre')->nullable();
            $table->text('titre_test1')->nullable();
            $table->text('titre_test2')->nullable();
            $table->text('factor')->nullable();
            $table->text('factor_test1')->nullable();
            $table->text('factor_test2')->nullable();
            $table->text('acidity_cal')->nullable();
            $table->text('acidity_cal_test1')->nullable();
            $table->text('acidity_cal_test2')->nullable();
            $table->text('acidity')->nullable();
            $table->text('acidity_test1')->nullable();
            $table->text('acidity_test2')->nullable();
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('fche040124s');
    }
};
