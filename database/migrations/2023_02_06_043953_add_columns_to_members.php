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
        Schema::table('members', function (Blueprint $table) {
            $table->text('name')->nullable();
            $table->text('father_name')->nullable();
            $table->text('birth_date')->nullable();
            $table->text('birth_place')->nullable();
            $table->text('nationality')->nullable();
            $table->text('edu')->nullable();
            $table->text('occupation')->nullable();
            $table->text('resident_no')->nullable();
            $table->text('resident_street')->nullable();
            $table->text('resident_township')->nullable();
            $table->text('resident_city')->nullable();
            $table->text('resident_state')->nullable();
            $table->text('postal_code')->nullable();
            $table->text('phone')->nullable();
            $table->text('company_name')->nullable();
            $table->text('registration_no_date')->nullable();
            $table->text('business_name')->nullable();
            $table->text('paid_capital')->nullable();
            $table->text('employee_no')->nullable();
            $table->text('designaion')->nullable();
            $table->text('office_no')->nullable();
            $table->text('office_street')->nullable();
            $table->text('office_ward')->nullable();
            $table->text('office_township')->nullable();
            $table->text('office_city')->nullable();
            $table->text('office_state')->nullable();
            $table->text('office_phone')->nullable();
            $table->text('viber')->nullable();
            $table->text('website')->nullable();
            $table->text('business_type_id')->nullable();
            $table->longText('business_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('father_name');
            $table->dropColumn('birth_date');
            $table->dropColumn('birth_place');
            $table->dropColumn('nationality');
            $table->dropColumn('edu');
            $table->dropColumn('occupation');
            $table->dropColumn('resident_no');
            $table->dropColumn('resident_street');
            $table->dropColumn('resident_township');
            $table->dropColumn('resident_city');
            $table->dropColumn('resident_state');
            $table->dropColumn('postal_code');
            $table->dropColumn('phone');
            $table->dropColumn('company_name');
            $table->dropColumn('registration_no_date');
            $table->dropColumn('business_name');
            $table->dropColumn('paid_capital');
            $table->dropColumn('employee_no');
            $table->dropColumn('designaion');
            $table->dropColumn('office_no');
            $table->dropColumn('office_street');
            $table->dropColumn('office_ward');
            $table->dropColumn('office_township');
            $table->dropColumn('office_city');
            $table->dropColumn('office_state');
            $table->dropColumn('office_phone');
            $table->dropColumn('viber');
            $table->dropColumn('website');
            $table->dropColumn('business_type_id');
            $table->dropColumn('business_text');
        });
    }
};
