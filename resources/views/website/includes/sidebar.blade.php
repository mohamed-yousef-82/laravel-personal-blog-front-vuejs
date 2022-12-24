
                       <div class="col-md-3">
                        <div class="about-fixed">
                         
                          <div class="my-pic">
                             <img src="{{asset('uploads/'.$setting->image)}}" alt="">
                             </div>
                             <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>

                             <div class="white-spacing sidebar-data">
                              <h1>{{$setting->name}}</h1>
                              <span>{{$setting->job}}</span>
                          </div> 


                             <div id="menu" class="collapse">
                              <ul class="menu-link">
                                <li><router-link :to="{name:'Home'}">Home</router-link></li>
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
                               </ul>
                            </div> 
                           
                           
                           <div class="my-detail">
                           
                            <ul class="social-icon">
                              <li><a href="{{$setting->facebook}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="{{$setting->twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="{{$setting->instagram}}" target="_blank" class="linkedin"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="{{$setting->youtube}}" target="_blank" class="github"><i class="fa fa-youtube"></i></a></li>
                             </ul>
     
                         </div>
                       </div>
                     </div>
