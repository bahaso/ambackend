<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscoverExtras extends Migration
{
    public function up()
    {
        Schema::rename('am_post_discover_extra', 'am_post_discover_extras');
    }
    
    public function down()
    {
        Schema::rename('am_post_discover_extras', 'am_post_discover_extra');
    }
}
