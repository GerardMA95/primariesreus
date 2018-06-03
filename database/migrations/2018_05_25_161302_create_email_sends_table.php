<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_sends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('email_id')->unsigned();
            $table->foreign('email_id')
                ->references('id')->on('emails')
                ->onDelete('cascade');
            $table->timestamp('send_date')->nullable()->default(null);
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
        Schema::dropIfExists('email_sends');
    }
}
