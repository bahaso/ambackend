<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostDiscovers extends Migration
{
    public function up()
    {
        Schema::create('am_post_discovers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('content');
            $table->text('content_bottom');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_discovers');
    }
}
