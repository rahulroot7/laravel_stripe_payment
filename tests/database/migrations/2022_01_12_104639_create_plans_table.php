<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name')->nullable();
            $table->text('description');
            $table->enum('status', ['active', 'inactive'])->default('InActive');
            $table->string('plan_type')->nullable();
            $table->double('actual_price', 8, 2)->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->string('billing_style')->nullable();
            $table->string('discount')->nullable();
            $table->string('credits')->nullable();
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
        Schema::dropIfExists('plans');
    }
}
