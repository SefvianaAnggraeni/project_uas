<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class DashboardController extends Controller
{

  public function index()
  {

    return view('admin.dashboard', [
      'produk' => Produk::all()
    ]);
  }

  public function logout() {
    $this->middleware('guest')->except('logout');
    return view('home');
  }
}
