<?php namespace am\Attachments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmAttachments extends Migration
{
    public function up()
    {
        Schema::create('am_attachments_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('event')->nullable();
            $table->string('source')->nullable();
            $table->dateTime('date')->nullable();
            $table->text('description')->nullable();
            $table->string('category');
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_attachments_');
    }
}
