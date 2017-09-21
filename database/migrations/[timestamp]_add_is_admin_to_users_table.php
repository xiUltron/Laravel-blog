<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/9/21
 * Time: 09:43
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->boolean('is_admin')->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('is_admin');
        });
    }
}