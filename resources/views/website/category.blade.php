     @extends('website/layout')

    @section('content')

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">                            
                            <div class="sub-title">
                              <h2> {{$category->category}}</h2>
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
                                    	<div><span><i class="fa fa-calendar"></i><span>{{ $post->created_at}}</span> </span><span class="post-info-writter"><i class="fa fa-user-o"></i> <span>{{$post->user->name}}</span></span></div>
                                      @if($post->category)
                                      <a href="{{ route('showcategory',$post->category->id) }}"><i class="fa fa-book"></i>{{ $post->category->category}}</a>   
                                      @endif 
                                    </div>
                                    <div class="post-data">
                                      <p> {!! substr($post->details, 0,  300) !!} ...</p>
                                      <a href="{{ route('showpost',$post->id) }}" class="button button-style button-anim"><span>Read More</span></a>

                                    </div>
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
                         
                        
                        
                        <!-- Subscribe Form Start -->
                        {{-- <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">
								
						  <div class="subscribe-form margin-top-20">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
                                <p>Subscribe to my weekly newsletter</p>
								<label for="mc-email" class="mc-label"></label>
							  </form>
                             
                           </div> --}}
                           <!-- Subscribe Form End -->
                           
                         

   @endsection    
    