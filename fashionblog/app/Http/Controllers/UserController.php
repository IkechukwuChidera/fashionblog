<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
      return view('users/index');
  }

  public function about()
  {
      return view('users/about');
  }

  public function blog_detail()
  {
      return view('users/blog-detail');
  }

  public function blog()
  {
      return view('users/blog');
  }


  public function contact()
  {
      return view('users/contact');
  }

  public function home_02()
  {
      return view('users/home-02');
  }

  public function home_03()
  {
      return view('users/home-03');
  }

  public function product_detail()
  {
      return view('users/product-detail');
  }

  public function product()
  {
      return view('users/product');
  }

  public function shoping_cart()
  {
      return view('users/shoping-cart');
  }



}
