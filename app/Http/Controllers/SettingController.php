<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Traits\UploadImageTrait;

class SettingController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               // $profile = Category::all();
        // $user = Auth::user();
        // $setting = Setting::first();
        // return view("../dashboard.blog.setting",compact("setting"));
        return view("../dashboard.blog.setting");

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $Setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           $setting = Setting::first();
           $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);
           if($request->hasFile('image')){
            
            $path = $this->UploadImage($request,"blog");
           }else{
            $path = $setting->image;
           }

        // $path = $profile->image;
        // if(!empty($request->file)){
        // $path = $this->UploadImage($request,"user");
        // }
            $setting->update([
            'name'=>$request->name,
            'job'=>$request->job,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'image'=>$path,

        ]);
        return redirect()->route("setting")->with("message","Setting Updated Succefully");

    }

}
