<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function list() {
        $data = Product::select('products.*', 'categories.categoryName','authors.authorName')
        ->join('categories','products.categoryID','=','categories.categoryID')
        ->join('authors','products.authorID','=','authors.authorID')->get();
        return view('list', compact('data'));
    }

    public function add() {
        $author = Author::get();
        $Category = Category::get();
        return view('add', compact('author', 'Category'));
    }

    public function save(Request $request) {

    $product = new Product();
    $product->productID = $request->id;
    $product->productName = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->img = $request->image;
    $product->authorID= $request->author;
    $product->categoryID = $request->category;
    $product->save();
    return redirect()->back()->with('success', 'Product added successfully!!');
    }

    public function edit($id) {
        $author = Author::get();
        $category = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('edit', compact('data', 'author', 'category'));
    }

    public function update(Request $request) {
        $productID = $request->id;
        $productName = $request->name;
        $price = $request->price;
        $description = $request->description;
        $categoryID = $request->category;
        $img = $request->image;
        $authorID = $request->author;

        Product::where('productID', '=', $productID)->update([
            'productName'=>$productName,
            'price'=>$price,
            'description'=>$description,
            'img'=>$img,
            'categoryID'=>$categoryID,
            'authorID'=>$authorID
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    public function delete($id) {
        $data = Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', "Product successfully deleted!");
        
    }

    public function list2() {
        $data = Product::select('products.*', 'authors.authorName')
        ->join('authors','products.authorID','=','authors.authorID')->get();
        return view('list', compact('data'));
    }
}
