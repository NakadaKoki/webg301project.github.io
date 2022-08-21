<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function list_cate() {
        $data = Category::get();
        return view('list_cate', compact('data'));
    }

    public function add_cate() {
        $category = Category::get();
        return view('add_cate', compact('category'));
    }

    public function save_cate(Request $request) {
        $category = new Category();
        $category->categoryID = $request->categoryid;
        $category->categoryName = $request->categoryname;
        $category->description = $request->categorydescription;
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully!!');
    }

    public function edit_cate($categoryid) {
        $category = Category::get();
        $data = Category::where('categoryID', '=', $categoryid)->first();
        return view('edit_cate', compact('data', 'category'));
    }

    public function update_cate(Request $request) {
        $categoryID  = $request->categoryID;
        $categoryName = $request->categoryname;
        $categorydescription = $request->categorydescription;
        Category::where('categoryID', '=', $categoryID)->
        update([
            'categoryName'=>$categoryName,
            'description'=>$categorydescription
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    public function delete_cate($categoryid) {
        $data = Category::where('categoryID', '=', $categoryid)->delete();
        return redirect()->back()->with('success', 'Product removed successfully!');
    }
}
