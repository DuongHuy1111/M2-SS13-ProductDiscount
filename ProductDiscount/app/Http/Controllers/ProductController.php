<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        return view('welcome');
    }

    public function calculate(Request $request){
        $description = $request->Description;
        $price = $request->Price;
        $percent = $request->Percent;
        $discountAmount = $price * $percent * 0.01;
        $discountPrice = $price - $discountAmount;
        return view('result', compact('description', 'price', 'percent', 'discountAmount', 'discountPrice'));
    }
}
