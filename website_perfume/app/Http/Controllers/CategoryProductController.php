<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\suoort\Facades\Redirect;
session_start();
class CategoryProductController extends Controller
{
    //
    public function add_category_product()
    {
    	return view('admin.add_category_product');
    }
    public function view_category_product()
    {
    	$all_category_product=DB::table('tbl_category_product') ->get();
    	$manage_category_product=view('admin.view_category_product') -> with('view_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.view_category_product',$manage_category_product);
    }
    public function save_category_product()
    {
    	$data = array();
    	$data['category_name']=$request->category_product_name;
    	$data['category_describe']=$request->category_product_describe;
    	$result=DB::table('tbl_category_product')->insert($data);
    	Session::put('message','Bạn đã thêm loại sản phẩm thành công');

    	return Redirect::to('/XemSP');
    }
    public function edit_category_product($category_product_id)
    {
    	$edit_category_product= DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    	$manage_category_product=view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

    	return view('admin_layout')->with('admin.edit_category_product',$manage_category_product);
    }
    public function update_category_product(Request $request,$category_product_id)
    {
    	$data = array();
    	$data['category_name']=$request->category_product_name;
    	$data['category_describe']=$request->category_product_describe;

    	$result =DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
    	Seesion::put('message','Bạn đã cập nhật loại sản phẩm thành công!');

    	return Redirect::to('XemSP');
    }

   	public function delete_category_product(Request $request,$category_product_id)
   	{
   		DB:table('tbl_category_product') -> where('category_id',$category_product_id) -> delete();
   		Seesion::put('message','Bạn đã xóa loại sản phẩm thành công1');

   		return Redirect::to('XemSP');

   	}
}
