<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('market');
            $table->string('submarket');
            $table->date('audit_start_date')->unique();
            $table->date('audit_end_date')->unique();
            $table->string('lead_auditor');
            $table->string('guest_auditor');
            $table->string('rfe_sme');
            $table->string('ehs_sme');
            $table->string('audit_status',11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
