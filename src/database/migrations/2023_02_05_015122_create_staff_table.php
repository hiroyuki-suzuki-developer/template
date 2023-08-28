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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('authority')->default(0)->comment('0:一般,1:管理');
            $table->timestamp('create_datetime')->nullable();
            $table->bigInteger('create_user')->nullable();
            $table->timestamp('update_datetime')->nullable();
            $table->bigInteger('update_user')->nullable();
            $table->timestamp('delete_datetime')->nullable();
            $table->bigInteger('delete_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};
