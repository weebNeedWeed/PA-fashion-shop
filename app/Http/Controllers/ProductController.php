<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index(Request $request)
  {
    // $allCategories = DB::table("categories")
    //   ->leftJoin("products", "categories.id", "=", "products.category_id")
    //   ->select("categories.*", DB::raw("count(products.id) as category_count"))
    //   ->groupBy("name")
    //   ->orderBy("categories.name")
    //   ->get();

    $allCategories = Category::orderBy('name', 'ASC')->get();

    $allProducts = DB::table("products")
      ->join("categories", "products.category_id", "=", "categories.id")
      ->select("products.*");

    if ($request->has("search")) {
      $keyword = $request->search;

      $allProducts->where("products.name", "like", "%$keyword%");

      $allProducts->orWhere("categories.name", "like", "%$keyword%");
    }

    if ($request->has("category")) {
      $category = $request->category;

      $allProducts->where("categories.slug", $category);
    }

    $allProducts = $allProducts->paginate(12);

    return view("product.index", [
      "products" => $allProducts,
      "categories" => $allCategories,
    ]);
  }

  public function detail(Request $request)
  {
    $slug = $request->slug;
    $product = Product::all()->where("slug", $slug)->first();

    if (!$product) {
      return redirect("/404");
    }

    return view("product.detail", [
      "product" => $product
    ]);
  }
}
