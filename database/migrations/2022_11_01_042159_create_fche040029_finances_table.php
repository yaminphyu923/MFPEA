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
        Schema::create('fche040029_finances', function (Blueprint $table) {
            $table->id();
            $table->text('fche040029_id')->nullable();
            $table->text('receive_voucher')->nullable();
            $table->text('amount')->nullable();
            $table->text('date')->nullable();
            $table->text('remark')->nullable();
            $table->text('test_type')->nullable();
            $table->text('receive_voucher_2')->nullable();
            $table->text('amount_2')->nullable();
            $table->text('date_2')->nullable();
            $table->text('remark_2')->nullable();
            $table->text('test_type_2')->nullable();
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
        Schema::dropIfExists('fche040029_finances');
    }
};
