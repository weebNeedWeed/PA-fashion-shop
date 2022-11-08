<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Category::class, 3)->create()->each(function ($category) {
      $category->products()->createMany(factory(Product::class, 3)->make()->toArray());
    });
  }
}
