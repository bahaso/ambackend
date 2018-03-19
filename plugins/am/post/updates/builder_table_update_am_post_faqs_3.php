<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostFaqs3 extends Migration
{
    public function up()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->renameColumn('url_link', 'post_url_link');
        });
    }
    
    public function down()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->renameColumn('post_url_link', 'url_link');
        });
    }
}
