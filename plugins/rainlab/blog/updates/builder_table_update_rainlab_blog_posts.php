<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->string('category_type');
            $table->string('is_featured');
            $table->string('publish_type');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->dropColumn('category_type');
            $table->dropColumn('is_featured');
            $table->dropColumn('publish_type');
        });
    }
}
