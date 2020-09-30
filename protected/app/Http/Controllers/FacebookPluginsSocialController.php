<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\FacebookPluginsSocial;


class FacebookPluginsSocialController extends Controller
{
    //
    public function getDanhSach()
    {
    	$facebookpluginssocial = FacebookPluginsSocial::find(1);
    	
    	return view('admin/facebookpluginssocial/danhsach',['facebookpluginssocial'=>$facebookpluginssocial]);
    }

    public function postSua(Request $request)
    {
    	$facebookpluginssocial = FacebookPluginsSocial::find($request->id);
    	$this->validate($request,
       	[
                'sdk_javascript'=>'required'
               
            ],
            [
                'sdk_javascript.required'=>'Tên không được để trống' 
            ]);         
           
            $facebookpluginssocial->sdk_javascript = $request->sdk_javascript;
            $facebookpluginssocial->googlemap = $request->googlemap;
            $facebookpluginssocial->chatonline = $request->chatonline;

            $facebookpluginssocial->comments = $request->comments;
            $facebookpluginssocial->like_button = $request->like_button;
            $facebookpluginssocial->share_button = $request->share_button;
            $facebookpluginssocial->send_button = $request->send_button;
            $facebookpluginssocial->follow_button = $request->follow_button;

            $facebookpluginssocial->save();
            return redirect()->route('getDanhSachFacebookPluginsSocial')->with('thongbao','Thêm thông tin thành công');
    }
}
