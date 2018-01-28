<?php namespace am\Faqs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmFaqs extends Migration
{
    public function up()
    {
        Schema::create('am_faqs_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('am_faqs_');
    }
}
