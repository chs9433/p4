<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('fk_checklist_id');
            $table->string('type');
            $table->string('name');
            $table->string('note');
            $table->string('url');
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
        Schema::dropIfExists('attachments');
    }
}
