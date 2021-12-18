<?php namespace Gadimliestudio\Whitepapers\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWhitepapersTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_whitepapers_whitepapers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('description')->nullable();
            $table->text('image')->nullable();

            $table->text('info')->nullable();

            $table->text('file')->nullable();
            $table->text('full_description')->nullable();



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_whitepapers_whitepapers');
    }
}
