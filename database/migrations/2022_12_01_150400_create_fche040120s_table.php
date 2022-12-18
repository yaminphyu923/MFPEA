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
        Schema::create('fche040120s', function (Blueprint $table) {
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
            $table->text('silver')->nullable();
            $table->text('silver_test1')->nullable();
            $table->text('silver_test2')->nullable();
            $table->text('nitric')->nullable();
            $table->text('nitric_test1')->nullable();
            $table->text('nitric_test2')->nullable();
            $table->text('b')->nullable();
            $table->text('b_test1')->nullable();
            $table->text('b_test2')->nullable();
            $table->text('t')->nullable();
            $table->text('t_test1')->nullable();
            $table->text('t_test2')->nullable();
            $table->text('n')->nullable();
            $table->text('n_test1')->nullable();
            $table->text('n_test2')->nullable();
            $table->text('salt_cal')->nullable();
            $table->text('salt_cal_test1')->nullable();
            $table->text('salt_cal_test2')->nullable();
            $table->text('salt')->nullable();
            $table->text('salt_test1')->nullable();
            $table->text('salt_test2')->nullable();
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
        Schema::dropIfExists('fche040120s');
    }
};
