<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostFaqTabs extends Migration
{
    public function up()
    {
        Schema::create('am_post_faq_tabs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('faq_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_faq_tabs');
    }
}
