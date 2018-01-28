<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmAttachments2 extends Migration
{
    public function up()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->string('title_short');
        });
    }
    
    public function down()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->dropColumn('title_short');
        });
    }
}
