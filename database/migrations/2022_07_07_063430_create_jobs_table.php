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
            $table->string('job_title');
            $table->string('location');
            $table->enum('contract_type',['FULL_TIME','PART_TIME','REMOTE']);
            $table->string('avatar_path')->nullable();
            $table->string('number_of_people_needed')->nullable();
            $table->enum('gender',['MALE','FEMALE','BOTH']);
            $table->enum('category',[]);
            $table->string('work_experience')->nullable();
            $table->string('salary')->nullable();
            $table->enum('degree_of_education',[])->nullable();
            $table->enum('military_service_status',[])->nullable();
            $table->string('skills');
            $table->longText('job_description');
            $table->longText('company_introduction')->nullable();
            $table->integer('expiration_date');
            $table->boolean('urgent')->nullable();
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
