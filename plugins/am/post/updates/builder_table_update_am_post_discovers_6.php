<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscovers6 extends Migration
{
    public function up()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->string('title_extra')->nullable();
            $table->string('url_link_extra')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->dropColumn('title_extra');
            $table->dropColumn('url_link_extra');
        });
    }
}
