<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostTravels3 extends Migration
{
    public function up()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->string('slug', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->string('slug', 255)->nullable(false)->change();
        });
    }
}
