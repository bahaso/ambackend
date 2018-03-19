<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostMaps3 extends Migration
{
    public function up()
    {
        Schema::table('am_post_maps', function($table)
        {
            $table->text('post_url_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_maps', function($table)
        {
            $table->dropColumn('post_url_link');
        });
    }
}
