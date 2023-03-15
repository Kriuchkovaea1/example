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
        Schema::dropIfExists('posts');
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            //$table->unsignedBigInteger('category_id')->nullable();
            $table->foreignId('category_id')->constrained()->nullable();
            $table->timestamps();

            $table->index('category_id', 'post_category_idx'); //index создает индекс в столбце( имя столбца, который должен получить уникальный индекс, название таблицы):
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');// category_id соотвествует id  втаблице categories
//давайте определим user_id столбец в posts таблице, который ссылается на id столбец в users таблице:
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
