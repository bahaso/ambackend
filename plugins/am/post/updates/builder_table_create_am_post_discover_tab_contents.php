<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostDiscoverTabContents extends Migration
{
    public function up()
    {
        Schema::create('am_post_discover_tab_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('discover_tab_id');
            $table->string('title');
            $table->text('summary');
            $table->string('url_link');
            $table->string('arrow_color');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_discover_tab_contents');
    }
}
