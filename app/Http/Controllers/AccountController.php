<?php

namespace App\Http\Controllers;

use App\User;
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

  public function register()
  {
    return view("account.register");
  }

  public function createUser(Request $request)
  {
    $userData = $request->validate([
      "name" => ["required", "string", "min:8"],
      "address" => ["required", "string", "min:8"],
      "phone_number" => ["required", "regex:/(0)[0-9]{9}/"],
      "email" => ["required", "email", "unique:users,email"],
      "password" => ["required", "min:8", "confirmed"],
      "password_confirmation" => ["required"]
    ]);

    unset($userData["password_confirmation"]);

    $userData["password"] = bcrypt($userData["password"]);
    $user = User::create($userData);

    auth()->login($user);

    return redirect("/")->with("message", "Đăng ký thành công!");
  }

  public function logout(Request $request)
  {
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect("/")->with("message", "Đăng xuất thành công!");
  }
}
