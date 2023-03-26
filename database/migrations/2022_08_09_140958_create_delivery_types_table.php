<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_types', function (Blueprint $table) {
            $table->id();
            $table->string('name_fr');
            $table->string('name_en');
            $table->decimal('tarif_0_250', 4,2)->nullable();
            $table->decimal('tarif_251_500', 4,2)->nullable();
            $table->decimal('tarif_501_750', 4,2)->nullable();
            $table->decimal('tarif_751_1000', 4,2)->nullable();
            $table->decimal('tarif_1001_2000', 4,2)->nullable();
            $table->decimal('tarif_2001_5000', 4,2)->nullable();
            $table->decimal('tarif_5001_10000', 4,2)->nullable();
            $table->decimal('tarif_10001_15000', 4,2)->nullable();
            $table->decimal('tarif_15001_30000', 4,2)->nullable();
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
        Schema::dropIfExists('delivery_types');
    }
}
