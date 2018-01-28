<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmAttachments extends Migration
{
    public function up()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->date('date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->dateTime('date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
