<?php namespace am\Variables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmVariablesSettings extends Migration
{
    public function up()
    {
        Schema::create('am_variables_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('base_url_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_variables_settings');
    }
}
