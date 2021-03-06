<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostFaqs extends Migration
{
    public function up()
    {
        Schema::create('am_post_faqs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_faqs');
    }
}
