<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('source_id');
            $table->foreignId('ad_links_id');
            $table->foreignId('geolocation_id');
            $table->foreignId('category_id');
            $table->string('job_title');
            $table->tinyInteger('contract_type',['1','2','3','4','5','6']);
            $table->string('avatar_path')->nullable();
            $table->string('number_of_people_needed')->nullable();
            $table->enum('gender',['MALE','FEMALE','BOTH']);
            $table->string('work_experience')->nullable();
            $table->string('salary')->nullable();
            $table->tinyInteger('degree_of_education',['1','2','3','4','5','6'])->nullable();
            $table->enum('military_service_status',[])->nullable();
            $table->foreignId('skill_id');
            $table->longText('job_description');
            $table->longText('company_introduction')->nullable();
            $table->integer('expiration_date');
            $table->boolean('urgent')->nullable();
            $table->string('status');
            $table->string('rate')->nullable();
            $table->string('analysis')->nullable();

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
        Schema::dropIfExists('jobs');
    }
};
