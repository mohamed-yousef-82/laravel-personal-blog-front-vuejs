<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadImageTrait;

class PostController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $posts = Post::all();
        $data=[];
        foreach($posts as $post){
            $item = [
                'id'=>$post['id'],
                'title'=>$post->title,
                'image'=>$post->image,
                'details'=>$post->details,
                'user'=>$post->user->name,
                'created_at'=>$post->created_at,
            ];
            if($post->category != null){
                $item['category'] = $post->category->category;
            }
            array_push($data,$item);
        }
        return $data;
           
    }
    public function showpost(Post $post)
    {
        return $post;
        // return[
        //     'id'=>$post->id,
        //     'title'=>$post->title,
        //     'details'=>$post->details,
        //     'category'=>$post->category->category,
        //     'user'=>$post->user->name,
        //     'created_at'=>$post->created_at,
        // ];
        // $post = Post::find($id);
        // $related = Post::where('category_id',$post->category_id)
        // ->whereNot('id',$id)
        // ->orderBy('id', 'asc')
        // ->take(3)
        // ->get();
        // $comments = Comment::where('approved',1)->where('post_id', $id)->get();
        // return view('website.post',compact('post','related','comments'));
    }
    /**
     * Display a listing of Search Resaults.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
     
            $posts = Post::where('title','like', '%'.$request->search.'%')
            ->orWhere('details','like', '%'.$request->search.'%')
            ->latest()
            ->get();
            return view("../dashboard.posts.search",compact('posts'));

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("../dashboard.posts.addpost",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'details' => 'required',
            'image' => 'required',
        ]);
        $path = $this->UploadImage($request,"posts");
        // $file = $request->file('image');
        // $path = $file->store('posts','store');
        Post::create([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>$path,
            'category_id' => $request->category_id,
            'user_id' => auth()->id()
        ]);
        return redirect()->route("showposts")->with("message","Post added Succefully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view("../dashboard.posts.editpost",compact("post","categories"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $post = Post::find($id);
        //    if(($request->file) == null){
        //     $path = $post->image;
        //    }else{
        //     $file = $request->file('image');
        //     $path = $file->store('posts','store');
        //    }
        // $path = $this->UploadImage($request,"posts");
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);
           if($request->hasFile('image')){
            
            $path = $this->UploadImage($request,"posts");
           }else{
            $path = $post->image;
           }

            $post->update([
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>$path,
            'category_id' => $request->category_id,
            'user_id' => auth()->id()
        ]);
        return redirect()->route("showposts")->with("message","Post Updated Succefully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);  
        return redirect()->route("showposts")->with("message","Post Deleted Succefully");

    }
}
