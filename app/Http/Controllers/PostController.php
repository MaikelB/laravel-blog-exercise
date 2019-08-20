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

        return view('post', ['posts' => $posts]); 
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
     if($request->isMethod('post') && $id)
     {
        DB::table('posts')
        ->where('id', $id)
        ->update(['title' => $request->input('postTitle'), 
                    'content' => $request->input('postContent')]);
        return redirect('/posts');
     } else {
        $post = DB::table('posts')->where('id', $id)->first();
        if(!$post)
        {
            return response()->view('error', ['error' => 'There is no post available'], 404);
        }
        return view('postEdit', ['title' => $post->title, 'content' => $post->content]);
     }
     return response()->view('error', ['error' => 'Something went wrong'], 400);
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
            return redirect('/posts');
        } else {
            return view('postEdit', ['title' => 'Title here please', 'content' => 'content here']); 
        }
        return response()->view('error', ['error' => 'Something went wrong'], 400);
    }

     /**
     * Delete a post
     *
     * @return Response
     */
    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return view('postDelete');
    }
}