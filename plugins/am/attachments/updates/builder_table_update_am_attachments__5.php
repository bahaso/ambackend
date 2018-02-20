<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmAttachments5 extends Migration
{
    public function up()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->string('slug', 255)->nullable()->change();
            $table->string('title_short', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->string('slug', 255)->nullable(false)->change();
            $table->string('title_short', 255)->nullable(false)->change();
        });
    }
}
