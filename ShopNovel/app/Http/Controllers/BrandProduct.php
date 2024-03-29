<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('admin')->send();
        }

    }

    public function add_brand_product() {
        $this->AuthLogin();
        return view('admin.add_brand_product');
    }

    public function getall_brand_product() {
        $this->AuthLogin();
        $getall_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.getall_brand_product')->with('getall_brand_product', $getall_brand_product);
        return view('admin_layout')->with('admin.getall_brand_product', $manager_brand_product);
    }

    public function save_brand_product(Request $request) {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message', 'Thêm thành công');
        return Redirect::to('getall-brand-product'); 
    }

    public function unactive_brand_product($brand_product_id) {
       DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>1]);
       Session::put('message', 'Không kích hoạt ');
       return Redirect::to('getall-brand-product');

    }

    public function active_brand_product($brand_product_id) {
       DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>0]);
       Session::put('message', 'Kích hoạt');
       return Redirect::to('getall-brand-product');

    }
    public function edit_brand_product($brand_product_id) {
        $this->AuthLogin();
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);

    }
    public function update_brand_product(Request $request, $brand_product_id) {
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message', 'Cập nhật thành công');
        return Redirect::to('getall-brand-product');
    }
    public function delete_brand_product($brand_product_id) {
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message', 'Xóa thành công');
        return Redirect::to('getall-brand-product');
    }
}
