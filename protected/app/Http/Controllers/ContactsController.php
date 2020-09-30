<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contacts;

class ContactsController extends Controller
{
    //
    public function getDanhSach()
    {
    	$contacts = Contacts::all();

    	return view('admin/contacts/danhsach',['contacts'=>$contacts]);
    }

    public function getXoa($id)
    {
    	Contacts::destroy($id);

    	return redirect()->route('getDanhSachContacts')->with('thongbao','Xóa thành công');
    }
}
