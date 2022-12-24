                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 padding-30 footer">
                        <footer>
                          <h2 class="subscribe-title">Subscribe to my weekly newsletter</h2>

                          <h2 class="title-cut">
                            <span class="top-cut"></span>
                            <span class="bottom-cut"></span>

                          <form class="subscribe" method="post" action="{{route('storemailinglist')}}">
                            @csrf
                           <input id="mc-email" type="email" placeholder="Email Address" class="text-input" name="email">
                            <button type="submit">Submit</button>
                            </form>

                          </h2>
                         
                         
                                         
                                       <!-- Subscribe Form End -->
                                       <ul class="menu-link">
                                        <li><a class="{{Request::routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
                                        <li><a class="{{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
                                        @if(count($categories)>0)
                                        @foreach($categories as $category)
                                        <li><a class="{{Request::routeIs('showcategory/'.$category->id.'') ? 'active' : ''}}" href="{{route('showcategory',$category->id)}}">{{$category->category}}</a></li>
                                        @endforeach
                                        @endif 
                                        @guest
                                        <li><a class="{{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('login')}}">Login</a></li>
                                        <li><a class="{{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('register')}}">Register</a></li>
                                        @endguest
                                     </ul>                        <p>© Copyright 2022. All rights reserved</p>
                       </footer>
                     </div>
                     <!-- Footer End -->
                   
                   
                </div>
                <!-- Blog Post (Right Sidebar) End -->
              
          </div>
       </div>
    </div>
  
  
  
  <!-- Back to Top Start -->
  <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
  <!-- Back to Top End -->
  
      @vite('resources/js/app.js')
  
  <!-- Main Javascript File  -->
  <script type="text/javascript" src="{{asset('assets/website/js/scripts.js')}}"></script>
  {{-- <script type="text/javascript" src="{{asset('js/app.js')}}"></script> --}}

  
 </body>
</html>
