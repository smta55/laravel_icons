<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',16)->nullable()->unique();
            $table->string('clintname',100)->nullable();
            $table->float('propsalvalue', 9, 2)->nullable();
            $table->integer('proposaltype_id')->nullable();
            $table->integer('clientsource_id')->nullable();
            $table->integer('technicalapproval_id')->nullable();
            $table->integer('user_id')->nullable();
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
        //
    }
}
