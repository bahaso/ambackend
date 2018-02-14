<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostDiscoverExtra extends Migration
{
    public function up()
    {
        Schema::create('am_post_discover_extra', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('discover_id');
            $table->string('title');
            $table->text('summary');
            $table->string('url_link');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_discover_extra');
    }
}
