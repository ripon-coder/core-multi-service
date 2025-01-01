<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use RiponCoder\FileUpload\FileUpload;

class WhyChooseUsController extends Controller
{
    public function index(){
        $data['why_choose_us'] = WhyChooseUs::first();
        return view('admin.why-choose-us.index',$data);
    }

    public function update(Request $request){
        $why_choose_us = WhyChooseUs::first();
        $why_choose_us->fill($request->all());
        if ($request->file('file')) {
            $why_choose_us->image = FileUpload::path("dynamic-assets/why-choose-us")->removeFile($why_choose_us->image ?? '')->uploadFile($request->file);
        }
        $why_choose_us->save();
        return redirect()->back()->with('success', 'Saved!');
    }
}
