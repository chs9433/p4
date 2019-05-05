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
            # This generates two columns: `created_at` and `updated_at` to
# keep track of changes to a row
            $table->timestamps();
            $table->bigInteger('fk_market_id',13);
            $table->bigInteger('fk_submarket_id',26);
            $table->date('audit_start')->unique();
            $table->date('audit_end')->unique();
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
