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
        $table->bigInteger('location_id')->unsigned();

        # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
        $table->foreign('location_id')->references('id')->on('locations');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('audits_location_id_foreign');
        $table->dropColumn('location_id');
    }
}
