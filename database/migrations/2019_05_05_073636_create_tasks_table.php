<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('fk_checklist_id');
            $table->bigInteger('fk_observation_id');
            $table->bigInteger('fk_issue_id');
            $table->string('type');
            $table->string('location');
            $table->string('note');
            $table->date('due_date');
            $table->string('submitted_by_uswin_id');
            $table->string('submitted_by_first_name');
            $table->string('submitted_by_last_name');
            $table->string('submitted_by_email');
            $table->string('assigned_to_uswin_id');
            $table->string('assigned_to_first_name');
            $table->string('assigned_to_last_name');
            $table->string('assigned_to_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
