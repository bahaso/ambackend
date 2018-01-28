<?php namespace am\Variables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmVariablesSponsors extends Migration
{
    public function up()
    {
        Schema::table('am_variables_sponsors', function($table)
        {
            $table->string('link_url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_variables_sponsors', function($table)
        {
            $table->dropColumn('link_url');
        });
    }
}
