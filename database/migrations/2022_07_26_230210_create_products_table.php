<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name_fr');
            $table->string('name_en');
            $table->decimal('price',6,2);
            $table->decimal('price_with_discount',6,2);
            $table->decimal('weight', 6,3);
            $table->decimal('width', 6,2);
            $table->decimal('length', 6,2);
            $table->decimal('height', 6,2);
            $table->integer('measure_id');
            $table->text('description_fr');
            $table->text('description_en');
            $table->text('materials_fr');
            $table->text('materials_en');
            $table->text('instruction_fr');
            $table->text('instruction_en');
            $table->text('image_path');
            $table->integer('comment_id')->nullable();;
            $table->integer('nb_views');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('products');
    }

    
}
