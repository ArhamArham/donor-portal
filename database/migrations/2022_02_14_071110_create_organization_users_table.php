<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_users', function (Blueprint $table) {
            $table->id('tag_number');
            $table->bigInteger('organization_tag');
            $table->string('email', 200);
            $table->string('password', 200);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('role', 50)->default('user');
            $table->tinyInteger('status')->default(0);
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('organization_users');
    }
};
