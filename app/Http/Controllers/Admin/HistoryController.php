<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\History;
use RiponCoder\FileUpload\FileUpload;

class HistoryController extends Controller
{
    public function index(){
        $data['history'] = History::first();
        return view('admin.history.index',$data);
    }

    public function update(Request $request){
        $history = History::first();
        $history->fill($request->all());
        if ($request->file('file')) {
            $history->image = FileUpload::path("dynamic-assets/history")->removeFile($history->image ?? '')->uploadFile($request->file);
        }
        $history->save();
        return redirect()->back()->with('success', 'Saved!');

    }
}
