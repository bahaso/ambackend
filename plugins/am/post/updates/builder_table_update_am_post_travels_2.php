<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostTravels2 extends Migration
{
    public function up()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('am_post_travels', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
