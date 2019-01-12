<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id_worker');
            // Foreign keys
            $table->unsignedInteger('id_user');
            
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            // ------------fks
            $table->string('firstname', 64)->collation('utf8_general_ci');
            $table->string('lastname', 64)->collation('utf8_general_ci');
            $table->timestampsTz();
            $table->tinyinteger('active')->default('1');
            $table->tinyinteger('deleted')->default('0');
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
