<?php
namespace App\Services;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductService
{
    // Store a new product
    public function createProduct(Request $request)
    {
        $request->validate([
            'Pro_Name' => 'required|max:255|string',
            'Pro_Detail' => 'required|max:255|string',
            'Pro_Category' => 'required|max:255|string',
            'Pro_Price' => 'required|max:255|string',
            'Pro_Img' => 'file|sometimes',
        ]);
        $requestData = $request->all();
        $fileName = time().$request->file('Pro_Img')->getClientOriginalName();
        $path = $request->file('Pro_Img')->storeAs('images',$fileName,'public');
        $requestData['Pro_Img'] = '/'.'storage/'.$path;
        return Product::create($requestData);
    }
    // Update an existing product
    public function updateProduct(Request $request, int $id)
    {
        $request->validate([
            'Pro_Name' => 'required|max:255|string',
            'Pro_Detail' => 'required|max:255|string',
            'Pro_Category' => 'required|max:255|string',
            'Pro_Price' => 'required|max:255|string',
            'Pro_Img' => 'sometimes|file'
        ]);
        $requestData = $request->all();
        $fileName = time().$request->file('Pro_Img')->getClientOriginalName();
        $path = $request->file('Pro_Img')->storeAs('images',$fileName,'public');
        $requestData['Pro_Img'] = '/'.'storage/'.$path;
        return Product::findOrFail($id)->update($requestData);
    }
    // Delete a product
    public function deleteProduct(int $id)
    {
        $product_del = Product::findOrFail($id);
        if ($product_del->image) {
            Storage::disk('/storage/images')->delete($product_del->image);
        }
        $product_del->delete();
    }
    // Get a product by ID
    public function getUpdatePage(int $id)
    {
        return Product::findOrFail($id);
    }
}