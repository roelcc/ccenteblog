<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('short_name')->nullacle();
            $table->string('client');
            $table->integer('year')->unsigned();
            $table->string('type'); // plain text
            $table->string('duration'); // plain text
            $table->string('status'); // plain text
//            $table->text('acknowledgments');

            // SEO questions
            $table->text('question_0'); // title
            $table->text('question_1');
            $table->text('question_2');
            $table->text('question_3');

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
        Schema::dropIfExists('projects');
    }
}
