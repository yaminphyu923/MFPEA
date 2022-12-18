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
        Schema::create('h_m_m_che040146_finances', function (Blueprint $table) {
            $table->id();
            $table->text('hmm_che040146_id')->nullable();
            $table->text('receive_voucher')->nullable();
            $table->text('amount')->nullable();
            $table->text('date')->nullable();
            $table->longText('remark')->nullable();
            $table->longText('test_type')->nullable();
            $table->text('receive_voucher_2')->nullable();
            $table->text('amount_2')->nullable();
            $table->text('date_2')->nullable();
            $table->longText('remark_2')->nullable();
            $table->longText('test_type_2')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('h_m_m_che040146_finances');
    }
};
