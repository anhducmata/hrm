<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('deductions');
            $table->string('bonuses');
            $table->string('loans');
            $table->string('insuarnace');
            $table->string('advance_salary');
            $table->string('overtimes');
            $table->string('salary_playslips');
            $table->string('commissions');
            $table->string('reinbursement');
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
        //
    }
}
