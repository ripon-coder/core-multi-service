<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function pendingReview(){
        $data["pendings"] = Review::where("status","pending")->paginate(20);
        return view('admin.review.pending',$data);
    }
    public function approvedReview(){
        $data["approved"] = Review::where("status","approved")->paginate(20);
        return view('admin.review.approve',$data);
    }
    public function cancelReview(){
        $data["cancelled"] = Review::where("status","cancelled")->paginate(20);
        return view('admin.review.cancel',$data);
    }

    public function approvedReviewSave($id){
        Review::where("id",$id)->update(['status'=>"approved"]);
        return back()->with("success","Approved");
    }
    public function pendingReviewSave(){

    }
    public function cancelReviewSave($id){
        Review::where("id",$id)->update(['status'=>"cancelled"]);
        return back()->with("success","cancelled");
    }
}
