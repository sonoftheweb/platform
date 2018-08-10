<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrchidAttachmentstableTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('attachments', function(Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('original_name');
            $table->string('mime');
            $table->string('extension')->nullable();
            $table->bigInteger('size')->default(0);
            $table->integer('sort')->default(0);
            $table->text('path');
            $table->text('description')->nullable();
            $table->text('alt')->nullable();
            $table->text('hash')->nullable();
            $table->string('disk')->default('public');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('group')->nullable();
            $table->timestamps();
        });

        Schema::create('attachmentable', function(Blueprint $table) {
            $table->increments('id');
            $table->string('attachmentable_type');
            $table->integer('attachmentable_id')->unsigned();
            $table->integer('attachment_id')->unsigned();

            $table->index(['attachmentable_type', 'attachmentable_id']);

            $table->foreign('attachment_id')
                ->references('id')
                ->on('attachments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('attachments');
        Schema::drop('attachmentable');
    }
}
