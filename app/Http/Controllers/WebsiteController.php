<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        // (when work with blade) return view('website.home');
        return view('vue');
    }

    public function showpost($id)
    {
        $post = Post::find($id);
        $related = Post::where('category_id',$post->category_id)
        ->whereNot('id',$id)
        ->orderBy('id', 'asc')
        ->take(3)
        ->get();
        $comments = Comment::where('approved',1)->where('post_id', $id)->get();
        return view('website.post',compact('post','related','comments'));
    }

    public function showcategory($categoryid)
    {
        $posts = Post::where('category_id',$categoryid)->get();
        $category = Category::where('id',$categoryid)->first();
        return view('website.category',compact('posts','category'));
    }
    // public function showcomments()
    // {
    //     $comments = Comment::where('approved',1)->get();
    //     return view('website.post',compact('comments'));
    // }
    public function search(Request $request)
    {
     
            $posts = Post::where('title','like', '%'.$request->search.'%')
            ->orWhere('details','like', '%'.$request->search.'%')
            ->latest()
            ->get();
            return view("website.search",compact('posts'));

    }

    public function contact()
    {
            return view("website.contact");
    }

    public function sendmail(Request $request)
    {
         $data = $request->validate([
            'title' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        Mail::to('m.yousef0082@gmail.com')->send(new Contact($data));
        return redirect(route('contact'))->with("status","Your Message Sent Succefully");

    }
    
}
