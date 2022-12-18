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
        Schema::create('h_m_m_che040146s', function (Blueprint $table) {
            $table->id();
            $table->text('job_number')->nullable();
            $table->text('sample_name')->nullable();
            $table->text('received_date')->nullable();
            $table->text('initiated_date')->nullable();
            $table->text('reported_date')->nullable();
            $table->text('method')->nullable();
            $table->text('weight')->nullable();
            $table->text('weight_1')->nullable();
            $table->text('weight_2')->nullable();
            $table->text('nitric_volume')->nullable();
            $table->text('nitric_volume_1')->nullable();
            $table->text('nitric_volume_2')->nullable();
            $table->text('hydrogen_volume')->nullable();
            $table->text('hydrogen_volume_1')->nullable();
            $table->text('hydrogen_volume_2')->nullable();
            $table->text('volume')->nullable();
            $table->text('volume_1')->nullable();
            $table->text('volume_2')->nullable();
            $table->text('df')->nullable();
            $table->text('df_1')->nullable();
            $table->text('df_2')->nullable();
            $table->text('sd')->nullable();
            $table->text('sd_1')->nullable();
            $table->text('sd_2')->nullable();
            $table->text('concentration')->nullable();
            $table->text('concentration_1')->nullable();
            $table->text('concentration_2')->nullable();
            $table->text('reagent')->nullable();
            $table->text('reagent_1')->nullable();
            $table->text('reagent_2')->nullable();
            $table->text('real_concentration')->nullable();
            $table->text('real_concentration_1')->nullable();
            $table->text('real_concentration_2')->nullable();
            $table->text('mg')->nullable();
            $table->text('mg_1')->nullable();
            $table->text('mg_2')->nullable();
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
        Schema::dropIfExists('h_m_m_che040146s');
    }
};
