<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationDesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idusers');
            $table->string('name');
            $table->string('pseudo')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('idcategories');
            $table->string('lib');
            $table->integer('poid_min');
            $table->integer('poid_max');
        });

        Schema::create('combatants', function (Blueprint $table) {
            $table->increments('idcombatants');
            $table->string('nom');
            $table->string('postnom')->nullable();
            $table->string('prenom');
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->unsignedInteger('idcategories');
            $table->integer('poid');
            $table->text('picture')->nullable();

            $table->foreign('idcategories')
                  ->references('idcategories')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combatants');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
}
