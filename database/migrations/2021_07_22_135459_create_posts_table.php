<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('tag')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
// $post->title = 'Judul Kedua'
// $post->category_id = '2'
// $post->slug = 'judul-kedua'
// $post->excerpt = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, commodi? Sunt, cupiditate.'
// $post->body = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, commodi? Sunt, cupiditate. Praesentium earum eveniet esse unde.</p> <p> Beatae dignissimos itaque possimus aperiam eum, numquam eos quas modi ad ipsam quam?</p>'

// $post->save();
