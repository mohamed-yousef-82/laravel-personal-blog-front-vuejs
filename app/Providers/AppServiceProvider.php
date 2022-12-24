<?php

namespace App\Providers;
// use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $categories = Category::all();
        Setting::checkSetting();
        $setting = Setting::first();
        $comments = Comment::all();
        view()->share([
            'posts'=>$posts,
            'categories'=>$categories,
            'setting'=>$setting,
            'comments'=>$comments
        ]);

        // Paginator::useBootstrap();      
          
    }
}
