<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string("name");
            $table->timestamps();    
        });

        Schema::create('post_tags', function (Blueprint $table) 
        {
        $table->increments('id');
        $table->integer("post_id")->unsigned()->index();
        $table->integer("tag_id")->unsigned()->index();
        $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");//Suppression en cascade des relations si suppression du post
        $table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade");//Suppression en cascade des relations si suppression du post.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        
    }
}
