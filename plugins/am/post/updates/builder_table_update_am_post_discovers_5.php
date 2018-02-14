<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscovers5 extends Migration
{
    public function up()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->string('tab_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->dropColumn('tab_title');
        });
    }
}
