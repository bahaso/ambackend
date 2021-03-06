<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenfrekeMenumanagerMenus6 extends Migration
{
    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->integer('rainlab_post_id');
        });
    }
    
    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->dropColumn('rainlab_post_id');
        });
    }
}
