<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpdeskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('incidents', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('text');
            $table->string('location');
            $table->string('user_key');
            $table->integer('stage_id');
            $table->string('resolve_text');
            $table->date('reslove_date');
            $table->timestamps();
        });

        Schema::create('requests', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('business_need');
            $table->longText('business_requirment');
            $table->longText('business_value');
            $table->string('user_key');
            $table->string('stage_id');
            $table->date('resolve_date');
            $table->timestamps();
        });
        
        Schema::create('request_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name');
            $table->string('file_location');
            $table->integer('request_id');
            $table->timestamps();
        });

        Schema::create('incident_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name');
            $table->string('file_location');
            $table->integer('incident_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stages');
        Schema::dropIfExists('incidents');
        Schema::dropIfExists('requests');
        Schema::dropIfExists('request_attachments');
        Schema::dropIfExists('incident_attachments');
    }
}
