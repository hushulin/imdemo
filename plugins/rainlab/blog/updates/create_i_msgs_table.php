<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateIMsgsTable extends Migration
{

    public function up()
    {
        Schema::create('rainlab_blog_i_msgs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
    	    $table->integer('user_id');
    	    $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rainlab_blog_i_msgs');
    }

}
