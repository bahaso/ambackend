<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenfrekeMenumanagerMenus4 extends Migration
{
    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->smallInteger('123');
        });
    }
    
    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->dropColumn('123');
        });
    }
}
