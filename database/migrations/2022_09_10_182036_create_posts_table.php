<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            
            $table->string('title');
            $table->text('content');
            $table->text('images');
            $table->unsignedBigInteger('likes')->nullable();
            $table->boolean('status')->default(1);

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id','post_categoty_idx');
            $table->foreign('category_id') -> references('id') -> on('categories');

            $table->timestamps();
            $table->softDeletes();
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
};
