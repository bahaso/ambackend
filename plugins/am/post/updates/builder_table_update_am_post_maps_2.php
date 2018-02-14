<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostMaps2 extends Migration
{
    public function up()
    {
        Schema::table('am_post_maps', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_maps', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
