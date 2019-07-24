<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vocabulary');
	        $table->string('pronunciation');
	        $table->integer('type');
	        $table->string('synonym');
	        $table->string('mean');
	        $table->string('ex');
	        
	        $table->integer('test_id');
	        $table->integer('user_id');
	        
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
        Schema::dropIfExists('vocabularies');
    }
}
