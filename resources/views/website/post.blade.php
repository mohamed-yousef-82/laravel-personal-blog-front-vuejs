@extends('website/layout')

@section('content')
<!-- About Me (Left Sidebar) Start -->
                  <!-- Blog Post (Right Sidebar) Start -->
                  <div class="col-md-9">
                     <div class="col-md-12 page-body">
                             
                             
                             {{-- <div class="sub-title">
                                    <a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
                                 <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
                              </div> --}}
                             
                             
                             <div class="col-md-12 content-page">
                               <div class="col-md-12 blog-post">
                                 
                                 
                                 <!-- Post Headline Start -->
                                 <div class="post-title">
                                     <h1>{{$post->title}}</h1> 
                                    </div>
                                    <!-- Post Headline End -->
                                     
                                     
                                 <!-- Post Detail Start -->
                                 <div class="post-info">
                                    <div><span><i class="fa fa-calendar"></i><span>{{ $post->created_at}}</span> </span><span class="post-info-writter"><i class="fa fa-user-o"></i> <span>{{$post->user->name}}</span></span></div>
                                   @if($post->category)
                                   <a href="{{ route('showcategory',$post->category->id) }}"><i class="fa fa-book"></i>{{ $post->category->category}}</a>   
                                   @endif 
                                 </div>
                                 <!-- Post Detail End -->
                                                                      <!-- Post Image Start -->
                                 <div class="post-image margin-top-40 margin-bottom-40">
                                    <img src="{{asset('uploads/'.$post->image)}} " alt="">
                                   </div>
                                   <!-- Post Image End -->

                                     
                                     <p>{!! $post->details !!}</p>
                                     
                                 
                                   
                                   {{-- {{$related}} --}}
                                   <!-- Post Image Gallery Start -->
                                   <h3>Related Posts</h3>
                                   <hr />
                                   <div class="related-posts">
                                   <div class="margin-top-10 margin-bottom-10">
                                    @forelse($related as $repost)
                                     <div class="col-md-4 col-sm-6 col-xs-12">
                                       <a href="{{ route('showpost',$repost->id) }}" target="_blank">
                                       <img src="{{asset('uploads/'.$repost->image)}}" class="img-responsive" alt="">
                                      
                                      <p>{{$repost->title}}</p>
                                    </a>
                                     </div>
                                     @empty
                                     <p>No Related Posts To Show</p>
                                     @endforelse
                                  </div>
                                 </div>
                                  <!-- Post Image Gallery End -->
                               
                          
                           <div id="fbcomment">
                              {{-- <h3>Add Comment</h3> --}}
                              <hr />

                              <div class="header_comment">
                                 <div class="row">
                                    <div class="col-md-6 text-left">
                                      <span class="count_comment">Comments ({{count($comments)}})</span>
                                    </div>
                                    {{-- <div class="col-md-6 text-right">
                                      <span class="sort_title">Sort by</span>
                                      <select class="sort_by">
                                       <option>Top</option>
                                       <option>Newest</option>
                                       <option>Oldest</option>
                                      </select>
                                    </div> --}}
                                 </div>
                              </div>
                     
                              <div class="body_comment">
                                 <div class="row">
                                    <div class="avatar_comment col-md-1">
                                       <img src="{{asset('assets\website\images\avatar.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="col-md-11">
                                   
                                       @if ($errors->any())
                                       <div class="alert alert-danger">
                                           <ul>
                                               @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   @endif
                                   @if (session('status'))
                                   <div class="alert alert-success">
                                       {{ session('status') }}
                                   </div>
                                  @endif
                                    <form action="{{route("comment",$post->id)}}" method="post">
                                       @csrf
                                    <input type="text" name="name" placeholder="Your name..." />
                                    <div class="box_comment">
                                      <textarea class="commentar" placeholder="Add a comment..." name="comment"></textarea>
                                      <div class="box_post">
                                       <div class="pull-left">
                                         {{-- <input type="checkbox" id="post_fb"/> --}}
                                         <label for="post_fb">Send your comment to review</label>
                                       </div>
                                       <div class="pull-right">
                                         <span>
                                          {{-- <img src="{{asset('assets\images\blog\avatar.jpg')}}" alt="avatar" />
                                          <i class="fa fa-caret-down"></i>
                                         </span> --}}
                                         <button type="submit">Post</button>
                                       </div>
                                      </div>
                                    </div>
                                    </div>
                                 </form>
                                 </div>
                                    
                                       
                                       <!-- Start List Comment 2 -->
                                       @forelse($comments as $comment)
                                       <div class="box_result row">
                                          <div class="avatar_comment col-md-1">
                                             <img src="{{asset('assets\images\blog\avatar.jpg')}}" alt="avatar" />
                                          </div>
                                          <div class="result_comment col-md-11">
                                             <h4>{{$comment->name}}</h4>
                                             <p>{{$comment->comment}}</p>
                                             <div class="tools_comment">
                                                {{-- <a class="like" href="#">Like</a>
                                                <span aria-hidden="true"> · </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true"> · </span>
                                                <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>  --}}
                                                <span><i class="fa fa-calendar"></i>{{$comment->created_at}}</span>
                                             </div>
                                          </div>
                                       </div>
                                       @empty
                                       <p>No Comments To Show</p>
                                       @endforelse
                              </div>
                           </div>
                        </div>
                     </div>    

                         
         
                          </div>
                   <!-- Blog Post (Right Sidebar) End -->
                   @endsection