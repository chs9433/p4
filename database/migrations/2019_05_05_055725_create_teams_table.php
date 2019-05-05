<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('fk_audit_id')->unique();
            $table->string('lead_auditor_uswin_id');
            $table->string('lead_auditor_first_name');
            $table->string('lead_auditor_last_name');
            $table->string('lead_auditor_email');
            $table->string('lead_auditor_office_phone');
            $table->string('lead_auditor_mobile_phone');
            $table->string('lead_auditor_title');
            $table->string('lead_auditor_department');
            $table->string('secondary_auditor_uswin_id');
            $table->string('secondary_auditor_first_name');
            $table->string('secondary_auditor_last_name');
            $table->string('secondary_auditor_email');
            $table->string('secondary_auditor_office_phone');
            $table->string('secondary_auditor_mobile_phone');
            $table->string('secondary_auditor_title');
            $table->string('secondary_auditor_department');
            $table->string('guest_auditor_uswin_id');
            $table->string('guest_auditor_first_name');
            $table->string('guest_auditor_last_name');
            $table->string('guest_auditor_email');
            $table->string('guest_auditor_office_phone');
            $table->string('guest_auditor_mobile_phone');
            $table->string('guest_auditor_title');
            $table->string('guest_auditor_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
