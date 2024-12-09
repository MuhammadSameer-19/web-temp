<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.Admin-opt-page');
    }
    public function Admin_add_page(){
        return view('admin.Admin-add-page');
    }
    public function create_pro(Request $request){
        $request->validate([
            'Pro_Name' => 'required|max:255|string',
            'Pro_Detail' => 'required|max:255|string',
            'Pro_Category' => 'required|max:255|string',
            'Pro_Price' => 'required|max:255|string',
            'Pro_Img' => 'sometimes',
        ]);
        Product::create([
            'Pro_Name' => $request->Pro_Name,
                'Pro_Detail' => $request->Pro_Detail,
                'Pro_Category' => $request->Pro_Category,
                'Pro_Price' => $request->Pro_Price,
                'Pro_Img' => $request->Pro_Img]);

        return redirect('Admin/add')->with('status','Product Created');        
    }
    public function Admin_del_page(int $id){
        $product_del = Product::findOrFail($id);
        $product_del->delete();
        return redirect()->back()->with('status','Product Deleted');        
    }
    public function Admin_upd_page(int $id){
        $product_det=Product::findOrFail($id);
        return view('admin.Admin-upd-page',compact('product_det'));
    }
    public function Admin_view_page(){
        $products=Product::get();
        return view('admin.Admin-view-page',compact('products'));
    }
    public function Admin_update_page(Request $request, int $id){
        $request->validate([
            'Pro_Name' => 'required|max:255|string',
            'Pro_Detail' => 'required|max:255|string',
            'Pro_Category' => 'required|max:255|string',
            'Pro_Price' => 'required|max:255|string',
            'Pro_Img' => 'sometimes',
        ]);
        Product::findOrFail($id)->update([
            'Pro_Name' => $request->Pro_Name,
                'Pro_Detail' => $request->Pro_Detail,
                'Pro_Category' => $request->Pro_Category,
                'Pro_Price' => $request->Pro_Price,
                'Pro_Img' => $request->Pro_Img]);

        return redirect('Admin/'.$id.'/update')->with('status','Product Update');        
    }
    
}
