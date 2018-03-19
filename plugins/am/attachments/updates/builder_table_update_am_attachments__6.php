<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmAttachments6 extends Migration
{
    public function up()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->integer('post_map_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('am_attachments_', function($table)
        {
            $table->dropColumn('post_map_id');
        });
    }
}
