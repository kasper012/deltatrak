<?php namespace Gadimliestudio\Products\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_products_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('status_type')->nullable();
            $table->text('applications')->nullable();

            $table->text('info')->nullable();

            $table->text('key_features')->nullable();
            $table->text('specifications')->nullable();
            $table->text('product_image')->nullable();


            $table->text('literature_image')->nullable();

            $table->text('literature_file')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_products_products');
    }
}
