<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscoverTabs extends Migration
{
    public function up()
    {
        Schema::table('am_post_discover_tabs', function($table)
        {
            $table->integer('discover_id');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_discover_tabs', function($table)
        {
            $table->dropColumn('discover_id');
            $table->increments('id')->unsigned()->change();
        });
    }
}
