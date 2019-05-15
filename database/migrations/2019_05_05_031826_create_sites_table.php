<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char('site_meta_unid',32);
            $table->string('market',13);
            $table->string('submarket',26);
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('latitude_decimal');
            $table->string('longitude_decimal');
            $table->string('site_type');
            $table->string('tower_type');
            $table->string('gate_combo');
            $table->longText('direction');
            $table->longText('restriction');
            $table->string('gl_location');
            $table->string('asr_number');
            $table->string('vzreg_frn');
            $table->string('network_id');
            $table->string('tower_manager');
            $table->string('access_restrictions');
            $table->string('signage_barriers');
            $table->string('site_tech_first_name');
            $table->string('site_tech_last_name');
            $table->string('site_tech_uswin_id');
            $table->string('site_tech_title');
            $table->string('site_tech_email');
            $table->string('site_tech_phone');
            $table->string('site_tech_alt_phone');
            $table->longText('site_attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
