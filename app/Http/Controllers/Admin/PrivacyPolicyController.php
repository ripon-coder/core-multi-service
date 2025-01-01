<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use RiponCoder\FileUpload\FileUpload;

class PrivacyPolicyController extends Controller
{
    public function index(){
        $data['privay_policy'] = PrivacyPolicy::first();
        return view('admin.privacy-policy.index',$data);
    }

    public function update(Request $request){
        $why_choose_us = PrivacyPolicy::first();
        $why_choose_us->fill($request->all());
        $why_choose_us->save();
        return redirect()->back()->with('success', 'Saved!');
    }
}
