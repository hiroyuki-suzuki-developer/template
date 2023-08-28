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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('タイトル');
            $table->text('description')->comment('詳細');
            $table->integer('is_open')->default(0)->comment('公開フラグ');
            $table->integer('type')->default(0)->comment('タイプ');
            $table->string('image_url')->nullable()->comment('画像パス');
            $table->timestamp('start_datetime')->nullable()->comment('公開日時');
            $table->timestamp('end_datetime')->nullable()->comment('公開日時');
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
        Schema::dropIfExists('notifications');
    }
};
