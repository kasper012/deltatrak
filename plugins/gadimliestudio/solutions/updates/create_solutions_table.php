<?php namespace Gadimliestudio\Solutions\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSolutionsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_solutions_solutions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('type')->nullable();
            $table->text('icon')->nullable();
            $table->text('banner_text')->nullable();
            $table->text('banner_image')->nullable();

            $table->text('problem_text')->nullable();

            $table->text('problem_image')->nullable();
            $table->text('currently_text')->nullable();
            $table->text('currently_image')->nullable();


            $table->text('product_about_text')->nullable();



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_solutions_solutions');
    }
}
