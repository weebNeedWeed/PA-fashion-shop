<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  // them action
  public function index()
  {
    return view("news.index");
  }
}
