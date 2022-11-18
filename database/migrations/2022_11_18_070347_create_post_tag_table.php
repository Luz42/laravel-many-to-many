<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            //essendo una tabella PIVOT pura serviranno solo le foreign key - entrambe dovranno essere delle primary key
            // $table->id();
            // $table->timestamps();

            //CREA LA COLONNA
            $table->unsignedBigInteger('post_id');

            //CREA L'ASSOCIAZIONE CON LA TABELLA, SULLA COLONNA INDICATA
            $table->foreign('post_id')->references('id')->on('posts');
            
            //STESSO PROCEDIMENTO PER L'ALTRA TABELLA + COLONNA
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
