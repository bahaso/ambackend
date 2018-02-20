<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmPostFaqs extends Migration
{
    public function up()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->text('summary')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_post_faqs', function($table)
        {
            $table->dropColumn('summary');
            $table->increments('id')->unsigned()->change();
        });
    }
}
