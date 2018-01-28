<?php namespace am\Variables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmVariablesSponsors extends Migration
{
    public function up()
    {
        Schema::create('am_variables_sponsors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_variables_sponsors');
    }
}
