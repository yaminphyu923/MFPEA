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
        Schema::create('fche040051s', function (Blueprint $table) {
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
            $table->text('magnesium')->nullable();
            $table->text('magnesium_test1')->nullable();
            $table->text('magnesium_test2')->nullable();
            $table->text('water')->nullable();
            $table->text('water_test1')->nullable();
            $table->text('water_test2')->nullable();
            $table->text('hcl')->nullable();
            $table->text('hcl_test1')->nullable();
            $table->text('hcl_test2')->nullable();
            $table->text('sample_titrant')->nullable();
            $table->text('sample_titrant_test1')->nullable();
            $table->text('sample_titrant_test2')->nullable();
            $table->text('blank_titrant')->nullable();
            $table->text('blank_titrant_test1')->nullable();
            $table->text('blank_titrant_test2')->nullable();
            $table->text('tvbn')->nullable();
            $table->text('tvbn_test1')->nullable();
            $table->text('tvbn_test2')->nullable();

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
        Schema::dropIfExists('fche040051s');
    }
};
