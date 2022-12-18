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
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('gender');
            $table->string('email')->unique()->nullable();
            $table->boolean('ban');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->integer('active');
            $table->boolean('is_deleted')->default(0);
            $table->string('ext');
            $table->integer('country_code');
            $table->string('phone_number');
            $table->string('mobile')->nullable()->unique();
            $table->text('agent_sign');
            $table->string('account_type');
            $table->string('account_status');
            $table->integer('assign_group')->unsigned()->nullable()->index('assign_group_3');
            $table->integer('primary_dpt')->unsigned()->nullable()->index('primary_dpt_2');
            $table->string('agent_timezone');
            $table->string('daylight_save');
            $table->string('limit_access');
            $table->string('directory_listing');
            $table->string('vacation_mode');
            $table->string('company');
            $table->string('role');
            $table->string('internal_note');
            $table->string('profile_pic');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
