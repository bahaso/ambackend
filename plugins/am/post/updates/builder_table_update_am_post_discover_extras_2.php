<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscoverExtras2 extends Migration
{
    public function up()
    {
        Schema::table('am_post_discover_extras', function($table)
        {
            $table->text('summary')->nullable()->change();
            $table->string('url_link', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_discover_extras', function($table)
        {
            $table->text('summary')->nullable(false)->change();
            $table->string('url_link', 255)->nullable(false)->change();
        });
    }
}
