<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ent_users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('username',60)->default('');
            $table->char('password',32)->default('');
            $table->string('email',60)->default('');
            $table->timestamps('created_at')->default(0);
            $table->timestamps('updated_at')->default(0);
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
}
