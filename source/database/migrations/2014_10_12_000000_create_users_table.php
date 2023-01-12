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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->tinyInteger('gender')->comment("0: Male, 1: Female");
            $table->date('birthday')->nullable();
            $table->string('avatar', 100)->nullable();
            $table->tinyInteger('role')->comment("0: Customer, 1: Admin")->default(0);
            $table->string('phone', 30)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('status')->comment("0: Inactive, 1: Active")->default("0");
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
