<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Show a list of all of the posts.
     *
     * @return Response
     */
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('post', ['posts' => $posts]); // TODO: CONFIGURE ROUTE!!
    }

     /**
     * Shows a single post
     *
     * @return Response
     */
    public function singlePost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('post', ['posts' => $post]);    
    }

     /**
     * Edit a post
     *
     * @return Response
     */
    public function editPost(Request $request, $id)
    {
     if($request)
     {
         if($id)
         {
            DB::table('posts')
            ->where('id', $id)
            ->update(['title' => $request->input('postTitle'), 
                      'content' => $request->input('postContent')]);
            return redirect('/post');
         }
     } else {
        return "Error";
     }
    } 

    /**
     * Create a post
     *
     * @return Response
     */
    public function newPost(Request $request)
    {

        if($request->input('postTitle'))
        {
            DB::table('posts')->insert([
                ['title' => $request->input('postTitle'), 
                'content' => $request->input('postContent')]
            ]);
            return redirect('/post');
        } else {
            return view('postEdit', ['title' => 'Title here please', 'content' => 'content here']); // TODO: CONFIGURE ROUTE!!
        }
    }

}