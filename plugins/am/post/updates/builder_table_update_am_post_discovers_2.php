<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostDiscovers2 extends Migration
{
    public function up()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('am_post_discovers', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
