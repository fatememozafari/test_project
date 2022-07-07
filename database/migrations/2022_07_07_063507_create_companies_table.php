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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_title');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('mobile')->nullable();
            $table->string('avatar_path')->nullable();
            $table->string('location');
            $table->string('description')->nullable();
            $table->string('member_of_company')->nullable();
            $table->date('date_of_establishment')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
