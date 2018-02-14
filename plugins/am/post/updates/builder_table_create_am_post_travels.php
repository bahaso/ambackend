<?php namespace Am\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmPostTravels extends Migration
{
    public function up()
    {
        Schema::create('am_post_travels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('population')->nullable();
            $table->string('language')->nullable();
            $table->string('government')->nullable();
            $table->string('area')->nullable();
            $table->string('religion')->nullable();
            $table->string('currency')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_post_travels');
    }
}
