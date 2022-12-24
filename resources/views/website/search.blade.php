     @extends('website/layout')

    @section('content')

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">                            
                            <div class="sub-title">
                              <h2>Search Results</h2>
                             </div>
                            <div class="col-md-12 content-page">
                              @forelse ($posts as $post)
                      
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                  <div class="post-image">
                                  <img class="dash-post-img" src="{{asset('uploads/'.$post->image)}}" alt="">
                                </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1>{{ $post->title }}</h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span>{{ $post->created_at}} / by <a href="#" target="_blank">{{$post->user->name}}</a></span>
                                      <p>
                                        @if($post->category)
                                        <a href="{{ route('showcategory',$post->category->id) }}"><i class="fa fa-book"></i>{{ $post->category->category}}</a>   
                                        @endif 
  
                                      </p>
                                    </div>  
                                    <p> {!! substr($post->details, 0,  300) !!} ...</p>
                                    <a href="{{ route('showpost',$post->id) }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                                </div>
                                <!-- Blog Post End -->
                                @empty
                                  <p>No Posts To Show</p>
                                @endforelse
                                
                                
                                
                                


                              
                                
                                
                                <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div>
                                
                             </div>
                              
                         </div>
                         
                        
      
                           
                         

   @endsection    
    