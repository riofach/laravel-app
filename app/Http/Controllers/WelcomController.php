<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
       function index()
       {
              $title = "Gloabl ";
              $nama = ['ahmad', 'sinta', 'beni'];
              // return view("welcome", [
              //        'title' => $title,
              //        'names' => $nama
              // ]);

              return View("welcome", compact('title', 'nama'));
       }

       function product()
       {
              $title = "Produk";
              $product = Product::get();
              // dd($product);
              return view("produk", compact('title', 'product'));
       }
}