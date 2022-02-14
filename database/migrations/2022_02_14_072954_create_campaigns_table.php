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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id('tag_number');
            $table->bigInteger('organization_tag');
            $table->string('name', 40);
            $table->string('description', 200);
            $table->datetime('start_date')->default(now()->toDateTimeString());
            $table->datetime('end_date')->default('9999-12-31 00:00:00');
            $table->tinyInteger('status')->default(0);
            $table->double('target_amount')->default(0);
            $table->float('minimum_amount')->default(0.01);
            $table->bigInteger('sort_order')->default(1);
            $table->bigInteger('icon_tag')->nullable();
            $table->float('tip')->default(0);
            $table->tinyInteger('issue_tax_receipt')->default(0);
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
        Schema::dropIfExists('campaigns');
    }
};
