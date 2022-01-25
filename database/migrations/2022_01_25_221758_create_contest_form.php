<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('The Primary Key for the table.');
            $table->timestamps();
            $table->string('email')->unique('string')->comment('The email address of the entrant');
            $table->boolean('verified')->default(false)->comment('If the email address was verified.');
            $table->softDeletes();
        });

        Schema::create('entry_contact', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('The Primary Key for the table.');
            $table->timestamps();
            $table->integer('entry_id')->unique('number')->comment('The extra contact info for this entry.');
            $table->string('phone_number')->comment('The phone number of the entrant');
            $table->string('instagram')->comment('The instagram account of the entrant');
            $table->string('facebook')->comment('The facebook account of the entrant');
            $table->softDeletes();

            $table->foreign('entry_id')->references('id')->on('entries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entries');
    }
}
