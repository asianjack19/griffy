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
        
        if(empty($request->input("title") || $request->input("body") )){
            return redirect('/story');
        }

        else
        {
            $request = DB::table('posts')->insert([
                'title' => $request["title"],
                'body' => $request["body"],
                'userID' => $request->userID,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            return redirect('/story');
        }

    }

    public function indexStory()
    {
        $story = DB::table('posts')
                ->join('users', 'users.userID','=','posts.userID')
                ->join('universities', 'universities.universityID','=','users.universityID')
                ->join('majors', 'majors.majorID','=','users.majorID')
                // ->join('reactions', 'reactions.postID','=','posts.postID')
                ->orderBy('posts.created_at','desc')
                ->get();
        $sorted = $story;
        //dd($sorted->all());
        return view('items.posts.story.index', compact('sorted'));
    }

    public function reactStory($postID)
    {
        $story = DB::table('posts')
                ->join('users', 'users.userID','=','posts.userID')
                ->join('universities', 'universities.universityID','=','users.universityID')
                ->where('postID', $postID)->first();
        return view('items.posts.story.react', compact('story'));
    }
    public function storeReactStory(Request $request)
    {
        
        if(empty($request->input("reactionBody") )){
            return redirect('/story');
        }
        
        $request = DB::table('reactions')->insert([
            'reactionBody' => $request['reactionBody'],
            'reactionType' => $request['reactionType'],
            'postID' => $request['postID'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('/story');
    }

    public function viewReactStory($postID)
    {
        $reactionList = DB::table('reactions')
                        -> join('posts', 'posts.postID','=','reactions.postID')
                        ->where('reactions.postID', $postID)
                        ->orderBy('reactions.created_at','desc')
                        ->get();
        
        return view('items.posts.story.reactList', compact('reactionList'));
    }
}
