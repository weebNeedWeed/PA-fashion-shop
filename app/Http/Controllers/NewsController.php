<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index()
  {
    $headNews = News::all()->skip(0)->take(3);
    $bodyNews = News::all()->skip(3);

    return view("news.index", [
      "headNews" => $headNews,
      "bodyNews" => $bodyNews
    ]);
  }
}
