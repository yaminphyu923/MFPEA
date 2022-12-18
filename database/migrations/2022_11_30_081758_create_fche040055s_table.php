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
        Schema::create('fche040055s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('product_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('volume')->nullable();
            $table->text('volume_test1')->nullable();
            $table->text('volume_test2')->nullable();
            $table->text('dilution')->nullable();
            $table->text('dilution_test1')->nullable();
            $table->text('dilution_test2')->nullable();
            $table->text('solutiona')->nullable();
            $table->text('solutiona_test1')->nullable();
            $table->text('solutiona_test2')->nullable();
            $table->text('btablet')->nullable();
            $table->text('btablet_test1')->nullable();
            $table->text('btablet_test2')->nullable();
            $table->text('temperature')->nullable();
            $table->text('temperature_test1')->nullable();
            $table->text('temperature_test2')->nullable();
            $table->text('time')->nullable();
            $table->text('time_test1')->nullable();
            $table->text('time_test2')->nullable();
            $table->text('digested')->nullable();
            $table->text('digested_test1')->nullable();
            $table->text('digested_test2')->nullable();
            $table->text('solutiond')->nullable();
            $table->text('solutiond_test1')->nullable();
            $table->text('solutiond_test2')->nullable();
            $table->text('reaction')->nullable();
            $table->text('reaction_test1')->nullable();
            $table->text('reaction_test2')->nullable();
            $table->text('reading')->nullable();
            $table->text('reading_test1')->nullable();
            $table->text('reading_test2')->nullable();
            $table->text('nitrogen')->nullable();
            $table->text('nitrogen_test1')->nullable();
            $table->text('nitrogen_test2')->nullable();
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
        Schema::dropIfExists('fche040055s');
    }
};
