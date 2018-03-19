<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostFaqs2 extends Migration
{
    public function up()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->text('url_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->dropColumn('url_link');
        });
    }
}
