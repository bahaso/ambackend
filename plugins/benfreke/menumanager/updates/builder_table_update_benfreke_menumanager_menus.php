<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenfrekeMenumanagerMenus extends Migration
{
    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->string('url_link', 255)->nullable();
            $table->dropColumn('url');
            $table->dropColumn('is_external');
            $table->dropColumn('link_target');
            $table->dropColumn('enabled');
            $table->dropColumn('parameters');
            $table->dropColumn('query_string');
        });
    }
    
    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->dropColumn('url_link');
            $table->string('url', 255)->nullable();
            $table->boolean('is_external')->default(0);
            $table->string('link_target', 255)->default('_self');
            $table->integer('enabled')->default(1);
            $table->string('parameters', 255)->nullable();
            $table->string('query_string', 255)->nullable();
        });
    }
}
