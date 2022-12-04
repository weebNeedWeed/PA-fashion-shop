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
      $table->increments("id");
      $table->string("name");
      $table->longText("description");
      $table->integer("price");
      $table->string("image");
      $table->string("slug")->unique();
      $table->unsignedInteger("category_id");
      $table->foreign("category_id")
        ->references("id")
        ->on("categories")
        ->onDelete("cascade");
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
