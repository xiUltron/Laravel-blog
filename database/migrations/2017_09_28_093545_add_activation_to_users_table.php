<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivationToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('activation_token')->nullable();
            $table->boolean('activated')->default(false);
        });
    }

    /**
     * reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function (blueprint $table) {
            $table->dropcolumn('activation_token');
            $table->dropcolumn('activated');
        });
    }
}
