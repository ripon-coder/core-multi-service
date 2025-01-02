<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $data['page_name'] = "Review";
        $data['reviews'] = Review::orderBy('updated_at','DESC')->where('status','approved')->paginate(3);
        return view("front.pages.review",$data);
    }

    public function save(ReviewRequest $request){
        $review = new Review();
        $review->fill($request->all());
        $review->save();
        return redirect()->back()->with('success', 'Saved!');
    }
}
