<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: products
         */
        Schema::create('products', function ($table) {
            $table->increments('id');
            $table->increments('category_id')->nullable();
            $table->increments('model_id')->nullable();
            $table->increments('filter_id')->nullable();
            $table->increments('store_id')->nullable();
            $table->increments('download_id')->nullable();
            $table->increments('related_id')->nullable();
            $table->increments('name')->nullable();
            $table->float('price')->nullable();
            $table->enum('status', ['enabled','disabled'])->nullable();
            $table->increments('quantity')->nullable();
            $table->increments('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->increments('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('tags')->nullable();
            $table->text('image')->nullable();
            $table->increments('sku')->nullable();
            $table->increments('upc')->nullable();
            $table->varchar('ean')->nullable();
            $table->varchar('jan')->nullable();
            $table->varchar('isbn')->nullable();
            $table->varchar('mpn')->nullable();
            $table->increments('location')->nullable();
            $table->increments('tax_class')->nullable();
            $table->enum('substract_stock', ['yes','no'])->nullable();
            $table->enum('outofstock_status', ['in stock','out of stock','pre-order'])->nullable();
            $table->text('seo_keyword')->nullable();
            $table->increments('order')->nullable();
            $table->text('dimensions')->nullable();
            $table->enum('weight_class', ['kilogram','gram','pound','ounce'])->nullable();
            $table->enum('length_class', ['centimeter','millimeter','inch'])->nullable();
            $table->increments('date_available')->nullable();
            $table->increments('manufacturer')->nullable();
            $table->increments('layouts')->nullable();
            $table->text('options')->nullable();
            $table->text('attributes')->nullable();
            $table->text('recurrings')->nullable();
            $table->text('discounts')->nullable();
            $table->text('special')->nullable();
            $table->text('images')->nullable();
            $table->text('rewards')->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('products');
    }
}
