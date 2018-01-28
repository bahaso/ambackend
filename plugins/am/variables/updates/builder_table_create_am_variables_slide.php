<?php namespace am\Variables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmVariablesSlide extends Migration
{
    public function up()
    {
        Schema::create('am_variables_slide', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_variables_slide');
    }
}
