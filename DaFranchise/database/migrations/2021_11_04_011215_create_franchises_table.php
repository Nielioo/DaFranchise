<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     * php artisan migrate:fresh
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->string('franchise_id')->primary();
            $table->string('franchise_name')->unique();
            $table->integer('franchise_founded');
            $table->string('franchise_type');
            $table->string('franchise_outlet');
            $table->string('franchise_investment');
            $table->string('franchise_website');
            $table->text('franchise_description');
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
        Schema::dropIfExists('franchises');
    }
}
