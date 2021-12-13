<?php namespace Gadimliestudio\Services\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_services_services', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('image')->nullable();
            $table->text('images')->nullable();

            $table->text('date_start')->nullable();
            $table->text('date_finish')->nullable();

            $table->text('youtube')->nullable();

            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_services_services');
    }
}
