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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('phone');
            $table->string('location');
            $table->string('email');
            $table->unsignedBigInteger('topic_id');
            $table->timestamps();

            $table->index('topic_id','clients_topics_idx');
            $table->foreign('topic_id','clients_topics_fk')->on('topics')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
