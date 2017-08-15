<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;


class ViewsController extends Controller
{
      public function faq()
    {
        return view('faq');
    }

    public function profile(User $user, Product $product)
    {
        return view('profile');
    }


}
