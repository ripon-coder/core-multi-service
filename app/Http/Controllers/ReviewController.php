<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $data['page_name'] = "Review";
        return view("front.pages.review",$data);
    }
}
