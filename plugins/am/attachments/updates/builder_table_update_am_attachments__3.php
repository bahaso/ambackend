<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmAttachments3 extends Migration
{
    public function up()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->date('date')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->date('date')->nullable()->change();
        });
    }
}
