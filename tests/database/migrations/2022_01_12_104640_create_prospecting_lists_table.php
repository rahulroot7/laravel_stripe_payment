<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospecting_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('list_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('data')->nullable();
            $table->string('title')->nullable();
            $table->string('company')->nullable();
            $table->string('departments')->nullable();
            $table->string('seniority')->nullable();
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
        Schema::dropIfExists('prospecting_lists');
    }
}
