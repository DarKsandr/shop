<?php

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
        Schema::rename('tags', 'tag_relations');

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::table('tag_relations', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->foreignId('tag_id')->after('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');

        Schema::rename('tag_relations', 'tags');

        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn('tag_id');
            $table->string('name')->after('product_id');
        });
    }
};
