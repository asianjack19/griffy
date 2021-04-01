<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class PostsController extends Controller
{
    //
    public function createStory()
    {
        return view('items.posts.story.create');
    }

    public function storeStory(Request $request)
    {
        $request->userID = Auth::user()->userID;
        
        $request = DB::table('posts')->insert([
            'title' => $request["title"],
            'body' => $request["body"],
            'userID' => $request->userID
        ]);
        return redirect('/story/create');
    }
}
//hey