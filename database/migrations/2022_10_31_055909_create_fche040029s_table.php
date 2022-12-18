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
        Schema::create('fche040029s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('sample_weight')->nullable();
            $table->text('sample_weight_1')->nullable();
            $table->text('sample_weight_2')->nullable();
            $table->text('koh_volume')->nullable();
            $table->text('koh_volume_1')->nullable();
            $table->text('koh_volume_2')->nullable();
            $table->text('koh_heating_time')->nullable();
            $table->text('koh_heating_time_1')->nullable();
            $table->text('koh_heating_time_2')->nullable();
            $table->text('boron_volume')->nullable();
            $table->text('boron_volume_1')->nullable();
            $table->text('boron_volume_2')->nullable();
            $table->text('boron_heating_time')->nullable();
            $table->text('boron_heating_time_1')->nullable();
            $table->text('boron_heating_time_2')->nullable();
            $table->text('potassium_weight')->nullable();
            $table->text('potassium_weight_1')->nullable();
            $table->text('potassium_weight_2')->nullable();
            $table->text('water_volume')->nullable();
            $table->text('water_volume_1')->nullable();
            $table->text('water_volume_2')->nullable();
            $table->text('petro_volume')->nullable();
            $table->text('petro_volume_1')->nullable();
            $table->text('petro_volume_2')->nullable();
            $table->text('chlo_volume')->nullable();
            $table->text('chlo_volume_1')->nullable();
            $table->text('chlo_volume_2')->nullable();
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
        Schema::dropIfExists('fche040029s');
    }
};
