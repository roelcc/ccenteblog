<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('sub_title_1')->nullable();
            $table->string('sub_title_2')->nullable();
            $table->string('slug', 128)->nullable();
            $table->string('file', 128)->nullable();
            $table->string('picture', 128)->nullable();


            // Questions about us
            $table->text('question_0')->nullable();
            $table->text('question_1')->nullable();
            $table->text('question_2')->nullable();
            $table->text('question_3')->nullable();
            $table->text('question_4')->nullable();
            $table->text('question_5')->nullable();
            $table->text('question_6')->nullable();
            //metadata
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();

            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->softDeletes();

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
        Schema::dropIfExists('about_uses');
    }
}
