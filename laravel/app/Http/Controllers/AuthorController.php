<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function add_au() {
        $author = Author::get();
        return view('add_au', compact('author'));
    }

    public function save_au(Request $request) {
        $author = new Author();
        $author->authorID = $request->authorID;
        $author->authorName = $request->authorName;
        $author->description = $request->authorDescription;
        $author->save();
        return redirect()->back()->with('success', 'Author added successfully!!');
    }

    public function edit_au($authorID) {
        $author = Author::get();
        $data = Author::where('authorID', '=', $authorID)->first();
        return view('edit_au', compact('data', 'author'));
    }

    public function update_au(Request $request) {
        $authorID  = $request->authorID;
        $authorName = $request->authorName;
        $authordescription = $request->authordescription;
        Author::where('authorID', '=', $authorID)->
        update([
            'authorName'=>$authorName,
            'description'=>$authordescription
        ]);
        return redirect()->back()->with('success', 'Author updated successfully!');
    }

    public function list_au() {
        $data = Author::get();
        return view('list_au', compact('data'));
    }

    public function delete_au($authorID) {
        $data = Author::where('authorID', '=', $authorID)->delete();
        return redirect()->back()->with('success', 'Author removed successfully!');
    }
}
