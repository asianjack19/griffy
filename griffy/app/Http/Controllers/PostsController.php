<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use App\Post;



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
        
        $request->validate([
            'title' => 'required',
        ]);

        $request = DB::table('posts')->insert([
            'title' => $request["title"],
            'body' => $request["body"],
            'userID' => $request->userID,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('/story');
    }

    public function indexStory()
    {
      
        $story = DB::table('posts')
                ->join('users', 'users.userID','=','posts.userID')
                ->join('universities', 'universities.universityID','=','users.universityID')
                ->join('majors', 'majors.majorID','=','users.majorID')
                ->orderBy('posts.created_at','desc')
                ->get();
        $sorted = $story;
        return view('items.posts.story.index', compact('sorted'));
    }
}
