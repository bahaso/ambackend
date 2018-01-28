<?php namespace am\Variables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmVariablesSlides extends Migration
{
    public function up()
    {
        Schema::rename('am_variables_slide', 'am_variables_slides');
    }
    
    public function down()
    {
        Schema::rename('am_variables_slides', 'am_variables_slide');
    }
}
