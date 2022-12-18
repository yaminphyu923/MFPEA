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
        Schema::create('fche040123s', function (Blueprint $table) {
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
            $table->text('gelatin')->nullable();
            $table->text('gelatin_test1')->nullable();
            $table->text('gelatin_test2')->nullable();
            $table->text('kaolin')->nullable();
            $table->text('kaolin_test1')->nullable();
            $table->text('kaolin_test2')->nullable();
            $table->text('indigo')->nullable();
            $table->text('indigo_test1')->nullable();
            $table->text('indigo_test2')->nullable();
            $table->text('potassium')->nullable();
            $table->text('potassium_test1')->nullable();
            $table->text('potassium_test2')->nullable();
            $table->text('filtratea')->nullable();
            $table->text('filtratea_test1')->nullable();
            $table->text('filtratea_test2')->nullable();
            $table->text('filtrateb')->nullable();
            $table->text('filtrateb_test1')->nullable();
            $table->text('filtrateb_test2')->nullable();
            $table->text('f')->nullable();
            $table->text('f_test1')->nullable();
            $table->text('f_test2')->nullable();
            $table->text('c')->nullable();
            $table->text('c_test1')->nullable();
            $table->text('c_test2')->nullable();
            $table->text('tannin_cal')->nullable();
            $table->text('tannin_cal_test1')->nullable();
            $table->text('tannin_cal_test2')->nullable();
            $table->text('tannin')->nullable();
            $table->text('tannin_test1')->nullable();
            $table->text('tannin_test2')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('fche040123s');
    }
};
