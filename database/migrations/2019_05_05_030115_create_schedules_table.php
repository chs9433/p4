<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('fk_audit_id')->unique();
            $table->bigInteger('fk_site_id')->unique();
            $table->date('inspection_date')->unique();
            $table->time('start_time')->unique();
            $table->time('end_time')->unique();
            $table->string('event_type');
            $table->string('destination_type');
            $table->string('inspection_type');
            $table->string('escort_uswin_id');
            $table->string('escort_first_name');
            $table->string('escort_last_name');
            $table->string('escort_email');
            $table->string('escort_office_phone');
            $table->string('escort_mobile_phone');
            $table->string('escort_title');
            $table->string('escort_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
