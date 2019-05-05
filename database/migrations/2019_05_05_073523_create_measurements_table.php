<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('fk_checklist_id');
            $table->double('latitude_decimal',8,2);
            $table->double('longitude_decimal',8,2);
            $table->string('note');
            $table->string('submitted_by_uswin_id');
            $table->string('submitted_by_first_name');
            $table->string('submitted_by_last_name');
            $table->string('submitted_by_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurements');
    }
}
