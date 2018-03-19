<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostFaqs4 extends Migration
{
    public function up()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->integer('post_map_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->dropColumn('post_map_id');
        });
    }
}
