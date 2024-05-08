<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()  {
        $posts = Post::paginate(5);
        return view('index')->with('posts', $posts);
    }

    public function show($id)  {
        $post = Post::find($id);
        return view('show')->with('post', $post);
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){

        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
            'email' => 'required',
        ]);

         DB::table('posts')->insert([
            'title' => $request->title,
            'desc' => $request->desc,
            'email' => $request->email,
        ]);

        return redirect('index');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('edit')->with('post', $post);
    }

    public function update(Request $request, $id){
        $post = DB::table('posts')->where('id', $id)->first();

        if ($post) {
            DB::table('posts')->where('id', $id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'email' => $request->email,
            ]);

            return redirect('index');

        }
    }

    public function delete($id){
        DB::table('posts')->where('id', $id)->delete();

        return redirect('index');

    }
}
