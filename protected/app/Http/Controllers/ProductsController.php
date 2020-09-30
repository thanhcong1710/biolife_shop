<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use App\Type_Products;

use App\Unit;

use App\Provider;

class ProductsController extends Controller
{
    //
    public function getDanhSach(Request $request)
    {
            $type_products = Type_Products::all();
            $provider = Provider::all();
    	$products = Products::paginate(10);         
    	return view('admin/products/danhsach',['products'=>$products,'type_products'=>$type_products,'provider'=>$provider]);
    }

    public function postDanhSach(Request $request)
    {
            $type_products = Type_Products::all();
            $provider = Provider::all();
            if ($request->id_type_products != 0 && $request->id_provider == 0) 
            {
                $products = Products::where('id_type_products',$request->id_type_products)->paginate(10);   
            }
            if ($request->id_provider !=0 && $request->id_type_products != 0) 
            {
                $products = Products::where('id_type_products',$request->id_type_products)->where('id_provider',$request->id_provider)->paginate(10);
            }
             if ($request->id_provider !=0 && $request->id_type_products == 0) 
            {
                $products = Products::where('id_provider',$request->id_provider)->paginate(10);
            }
            if ($request->id_type_products == 0 && $request->id_provider == 0) {
                $products = Products::paginate(10); 
            }
            
            return view('admin/products/danhsach',['products'=>$products,'type_products'=>$type_products,'provider'=>$provider,'id_type_products'=>$request->id_type_products,'id_provider'=>$request->id_provider]);
    }

    public function getThem()
    {
    	$type_products = Type_Products::all();

            $donvitinh = Unit::all();

    	return view('admin/products/them',['type_products'=>$type_products,'donvitinh'=>$donvitinh]);
    }

    public function postThem(Request $request)
    {
    	
    	$this->validate($request,
    		[
    			'name'=>'required',
    			'id_type_products'=>'required',
    			'description'=>'required|min:10',
                                    'in_price'=>'required|numeric', 
                                    'quantity'=>'required|numeric', 
    			'unit_price'=>'required|numeric',    			
    			'image'=>'required',
    			'unit'=>'required'

    		],
    		[
    			'name.required'=>'Tên không để trống',
    			'id_type_products.required'=>'Nhóm sản phẩm không để trống',
    			'description.required'=>'Mô tả không để trống',
    			'description.min'=>'Mô tả không ít hơn 10 ký tự',
                                    'in_price.required'=>'Giá nhập không được để trống',
                                    'in_price.numeric'=>'Giá phải là số',
                                    'quantity.required'=>'Số lượng không được để trống',
                                    'quantity.numeric'=>'Số lượng phải là số',
    			'unit_price.required'=>'Giá không được để trống',
    			'unit_price.numeric'=>'Giá phải là số',
    			'image.required'=>'Hình ảnh không để trống',    			
    			'unit.required'=>'Đơn vị không được để trống'

    		]);

            $products = new Products;
            $products->name = $request->name;
            $products->id_type_products = $request->id_type_products;
            $products->id_provider = $request->id_provider;
            $products->description = $request->description;
            $products->in_price = $request->in_price;
            $products->quantity = $request->quantity;
            $products->unit_price = $request->unit_price;
            $products->promotion_price = $request->promotion_price;
             $products->unit = $request->unit;
            $products->new = $request->new;
            if ($request->hasFile('image')) 
            {
                $file = $request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
                {
                    return redirect('admin/products/them')->with('loi','Bạn chỉ được phép thêm ảnh có định dạng JPG, PNG, JPGE');
                }
                $name = $file->getClientOriginalName();
                $name = str_random(5)."_".$name;
                while (file_exists('image/product/'.$name)) 
                {
                    $name = str_random(5)."_".$name;
                }
                $file->move('image/product',$name);
                $products->image = $name;
                
            }
            else
                $products->image = "";
            
            $products->save();
            return redirect('admin/products/them')->with('thongbao','Thêm tin thành công');

    }

    public function getSua($id)
    {
        $products = Products::find($id);

        $type_products = Type_Products::all();

        $donvitinh = Unit::all();

        $provider = Provider::where('id_type_products',$products->type_products->id)->get();

        return view('admin/products/sua',['products'=>$products,'type_products'=>$type_products,'donvitinh'=>$donvitinh,'provider'=>$provider]);
    }

    public function postSua(Request $request,$id)
    {
        $products = Products::find($id);

        $this->validate($request,
            [
                'name'=>'required',
                'id_type_products'=>'required',
                'description'=>'required|min:10',
                'in_price'=>'required|numeric', 
                'quantity'=>'required|numeric', 
                'unit_price'=>'required|numeric',
                'unit'=>'required'

            ],
            [
                'name.required'=>'Tên không để trống',
                'id_type_products.required'=>'Nhóm sản phẩm không để trống',
                'description.required'=>'Mô tả không để trống',
                'description.min'=>'Mô tả không ít hơn 10 ký tự',
                'in_price.required'=>'Giá nhập không được để trống',
                'in_price.numeric'=>'Giá phải là số',
                'quantity.required'=>'Số lượng không được để trống',
                'quantity.numeric'=>'Số lượng phải là số',
                'unit_price.required'=>'Giá không được để trống',
                'unit_price.numeric'=>'Giá phải là số',                            
                'unit.required'=>'Đơn vị không được để trống'

            ]);
          
            $products->name = $request->name;
            $products->id_type_products = $request->id_type_products;
            $products->id_provider = $request->id_provider;
            $products->description = $request->description;
            $products->in_price = $request->in_price;
            $products->quantity = $request->quantity;
            $products->unit_price = $request->unit_price;
            $products->promotion_price = $request->promotion_price;
             $products->unit = $request->unit;
            $products->new = $request->new;

             ///---------nhúng
            $products->comments = $request->comments;
            $products->like_button = $request->like_button;
            $products->share_button = $request->share_button;
            $products->send_button = $request->send_button;
            $products->follow_button = $request->follow_button;
        
            if ($request->hasFile('image')) 
            {
                $file = $request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
                {
                    return redirect('admin/products/them')->with('loi','Bạn chỉ được phép thêm ảnh có định dạng JPG, PNG, JPGE');
                }
                $name = $file->getClientOriginalName();
                $name = str_random(5)."_".$name;
                while (file_exists('image/product/'.$name)) 
                {
                    $name = str_random(5)."_".$name;
                }
                $file->move('image/product',$name);
                $products->image = $name;
                
            }         
            
            $products->save();
            return redirect('admin/products/sua/'.$id)->with('thongbao','Thêm tin thành công');
    }

    public function getXoa($id)
    {
    	Products::destroy($id);

    	return redirect()->route('getDanhSachProducts')->with('thongbao','Xóa thành công');
    }


}
