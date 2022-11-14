<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider2;
use App\Models\Backend\Notice;
use App\Models\Backend\Multi;

class SliderController2 extends Controller
{
    public function add(){
        return view("backend.pages.slider2.add");
    }
    public function store(Request $request){
        $slider2 = new Slider2;
        $slider2->subject = $request->subject;
        $slider2->date = $request->date;
        $slider2->time = $request->time;
        $slider2->description = $request->description;
        $slider2->status = $request->status;
        $slider2->save();

        return redirect()->route("slider2.manage");

    }
    public function editslider(Request $request, $id){
        $slider2 = Slider2::find($id);
        $slider2->subject = $request->subject;
        $slider2->date = $request->date;
        $slider2->time = $request->time;
        $slider2->description = $request->description;
        $slider2->status = $request->status;
        $slider2->update();
        return redirect()->route("slider2.manage");

    }
    public function manage(){
        $sliders2 = Slider2::all();
        return view("backend.pages.slider2.manage", compact("sliders2"));
    }
    public function delete($id){
        $slider2 = Slider2::find($id);
        $slider2->delete();
        return redirect()->route("slider2.manage");
    }
    public function view($id){
        $slider2 = Slider2::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider2.view", compact("slider2","multi"));
    }
    public function edit($id){
        $slider2 = Slider2::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider2.edit", compact("slider2","multi"));
    }

    public function addnotice(){
        return view("backend.pages.slider2.addnotice");
    }
    public function storenotice(Request $request){
        $notice = new Notice;
        $notice->nsubject = $request->nsubject;
        $notice->date = $request->date;
        $notice->ndescription = $request->ndescription;
        $notice->save();

        return redirect()->route("slider2.managenotice");

    }
    public function editslidernotice(Request $request, $id){
        $notice = Notice::find($id);
        $notice->nsubject = $request->nsubject;
        $notice->date = $request->date;
        $notice->ndescription = $request->ndescription;
        $notice->update();
        return redirect()->route("slider2.managenotice");

    }
    public function managenotice(){
        $notices = Notice::all();
        return view("backend.pages.slider2.managenotice", compact("notices"));
    }
    public function deletenotice($id){
        $notice = Notice::find($id);
        $notice->delete();
        return redirect()->route("slider2.managenotice");
    }
    public function viewnotice($id){
        $notice = Notice::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider2.viewnotice", compact("notice","multi"));
    }
    public function editnotice($id){
        $notice = Notice::find($id);
        $multi = Multi::Where("s_id", $id)->get();
        return view("backend.pages.slider2.editnotice", compact("notice","multi"));
    }
}
