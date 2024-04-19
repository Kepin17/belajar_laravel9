<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view("admin.dashboard", ["products" => $products]);
    }

    public function create() {
        return view("admin/createProduct");
    }

    public function store(Request $request) {
        
        $request->validate([
            "product_name" => "required",
            "product_price" => "required",
            "product_description" => "required",
            "product_quantity" => "required",
            "product_image" => "required"
        ]);

        $file = $request->file("product_image");
        $name = $request->product_name;
        $path = time() . '_' . $name . '.' . $file->getClientOriginalExtension();

        Storage::disk("local")->put("public/" . $path , file_get_contents($file));
        Product::create([
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "product_description" => $request->product_description,
            "product_quantity" => $request->product_quantity,
            "product_image" => $path
        ]);

        return Redirect::route("admin.product.create");        
    }
}
