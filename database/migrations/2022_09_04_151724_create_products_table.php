<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->softDeletes();
            $table->string('name', 255);
            $table->string('sku', 128);
            $table->text('description');
            $table->decimal('price')->default(0);
            $table->decimal('real_price')->default(0);
            $table->integer('discount')->default(0);
            $table->boolean('new')->default(0);
            $table->foreignIdFor(Category::class)->index();
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
};
