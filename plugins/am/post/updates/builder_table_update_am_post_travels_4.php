<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostTravels4 extends Migration
{
    public function up()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->integer('post_map_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->dropColumn('post_map_id');
        });
    }
}
