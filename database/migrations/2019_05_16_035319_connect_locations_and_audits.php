<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectLocationsAndAudits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('audits', function (Blueprint $table) {

        # Remove the field associated with the old way we were storing authors
        # Can do this here, or update the original migration that creates the `books` table
        # $table->dropColumn('author');

        # Add a new bigint field called `author_id` that has to be unsigned (i.e. positive)
        $table->bigInteger('author_id')->unsigned();

        # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
        $table->foreign('author_id')->references('id')->on('authors');

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
