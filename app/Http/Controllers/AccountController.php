<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
  public function login()
  {
    return view("account.login");
  }

  public function auth(Request $request)
  {
    $request->validate([
      "email" => ["email", "required"],
      "password" => ["required"]
    ]);

    if (auth()->attempt($request->only(["email", "password"]))) {
      return redirect("/")->with("message", "Đăng nhập thành công");
    }

    return back()->withErrors(["email" => "Sai tài khoản hoặc mật khẩu"])->withInput();
  }
}
