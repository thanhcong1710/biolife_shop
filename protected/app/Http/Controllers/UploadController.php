<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response; 

//use Request;
class UploadController extends Controller
{
    //function upload file images for new

    public function postHinhAnhTinTuc(Request $request)
    {

    	if($request->hasFile('HinhAnh'))
            {
                //lưu file
                $file = $request->file('HinhAnh');
                $filename = $file->getClientOriginalName('HinhAnh');
                $request->file('HinhAnh')->move('images',$filename);
            }    	
    	
    }

    public function getHinhAnhTinTuc()
    {
    	//echo Request::getClientSize('HinhAnh');
    	
    }
    public function ajaxImageUploadPost(Request $request)
    {
    	//var_dump($request->all());
    	if($request->hasFile('HinhAnh'))
	{
		//lưu file
                        $file->$request->hasFile('HinhAnh');
		$filename = $file->getClientOriginalName('HinhAnh');
		$request->file('HinhAnh')->move('images',$filename);
	}


     /* if ($validator->passes()) {

        $input = $request->all();
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        AjaxImage::create($input);

        return response()->json(['success'=>'done']);
      }

      return response()->json(['error'=>$validator->errors()->all()]);*/
    }
}
