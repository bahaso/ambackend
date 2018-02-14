<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostMaps extends Migration
{
    public function up()
    {
        Schema::create('am_post_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('post_id');
            $table->string('post_type');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_maps');
    }
}
