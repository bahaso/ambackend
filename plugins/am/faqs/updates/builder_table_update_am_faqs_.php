<?php namespace am\Faqs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmFaqs extends Migration
{
    public function up()
    {
        Schema::table('am_faqs_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('am_faqs_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
