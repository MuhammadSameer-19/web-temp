<?php
namespace App\Http\Controllers;
use App\Services\ProductService;
use Illuminate\Http\Request;
class ProductApiController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    // Store a new product (API)
    public function create_pro(Request $request)
    {
        $product = $this->productService->createProduct($request);
        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }
    // Show a specific product by ID (API)
    public function Admin_upd_page($id)
    {
        $product = $this->productService->getUpdatePage($id);
        return response()->json($product);
    }
    // Update a product (API)
    public function Admin_update_page(Request $request, $id)
    {
       $updatedProduct = $this->productService->updateProduct($request, $id);
        return response()->json(['message' => 'Product updated successfully', 'product' => $updatedProduct]);
    }
    // Delete a product (API)
    public function Admin_del_page($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(['message' => 'Product deleted successfully']);
    }
}