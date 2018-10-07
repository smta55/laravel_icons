<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Technicalapprovals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //technicalapprovals
        Schema::create('technicalapprovals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',2)->nullable();
            $table->string('aname',100)->nullable();
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
