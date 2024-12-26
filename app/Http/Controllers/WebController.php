<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home()
    {
        return view('web.home');
    }

    public function shop(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('Pro_Name', 'LIKE', "%$search%")
            ->orWhere('Pro_Category', 'LIKE', "%$search%")
            ->get();
        } else {
            $products = Product::get();
        }
        
        // return view('web.product');
        
        return view('web.product',compact('products','search'));
    }
    public function shop_comm(Request $request)
    {
        $products = Product::where('Pro_Category','LIKE',"E-Commerce")->get();
        // return view('web.product');
        
        return view('web.product',compact('products'));
    }
    public function shop_blog()
    {
            $products = Product::where('Pro_Category','LIKE',"Blog")->get();
        // return view('web.product');
        
        return view('web.product',compact('products'));
    }

    public function dy_search(Request $request)
    {
        $search = $request['search'] ?? "";
        $products = Product::where('Pro_Name', 'LIKE', "%$search%")
        ->orWhere('Pro_Category', 'LIKE', "%$search%")
        ->get();
        return view('web.product', compact('products'));
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function order(int $id)
    {
        $product_det = Product::findOrFail($id);
        return view('web.order',compact('product_det'));
    }
    public function place_order(Request $request){
        $request->validate([
            'Name' => 'required|max:255|string',
            'Email' => 'required|max:255|string',
            'Prod_Id' => 'required|int',
            'Customization' => 'required|string',
        ]);
        Order::create([
                'Name' => $request->Name,
                'Email' => $request->Email,
                'Prod_Id' => $request->Prod_Id,
                'Customization' => $request->Customization,]);

        return redirect('/product');        
    }
    public function detail(Request $request,int $id)
    {
        $product = Product::findOrFail($id);
        return view('web.product-detail',compact('product'));
    }
    public function Admin_page(){
        return view('admin.Admin-opt-page');
    }
    public function login(){
        return view('auth.login');
    }
}

