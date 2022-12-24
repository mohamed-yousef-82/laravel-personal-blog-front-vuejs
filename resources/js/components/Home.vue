<template>
                <div class="col-md-9">
              <div class="col-md-12 page-body">
                      <div class="sub-title">
                         <form action="{{route('websitesearch')}}" class="website-search search-form form-inline" method="get">
                          <input name="search" type="search" class="form-control" placeholder="Search" />
                          <button type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </form>
                       </div>
                      
                    
                      <div class="col-md-12 content-page">
                        <router-view></router-view>
                            </div>
<!-- Blog Post (Right Sidebar) End -->
<!-- @if ($errors->any()) -->
<div class="alert alert-danger">
<ul>
   <!-- @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
   @endforeach -->
</ul>
</div>
<!-- @endif
@if (session('status')) -->
<div class="alert alert-success">
<!-- {{ session('status') }} -->
</div>
<!-- @endif -->
<div class="col-md-12 text-center">
  <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
  <div id="post-end-message"></div>
 </div>
<!-- @if (session()->has('message')) -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<!-- <strong>Message :</strong> {{session()->get('message')}}. -->
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</button>
</div>
<!-- @endif -->
<!-- Back to Top Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- Back to Top End -->



<!-- All Javascript Plugins  -->
<p>No Posts To Show</p>
</div>

<!-- Subscribe Form Start -->
                          <!-- Footer Start -->
                          <div class="col-md-12 page-body margin-top-50 padding-30 footer">
                            <footer>
                              <h2 class="subscribe-title">Subscribe to my weekly newsletter</h2>
    
                              <h2 class="title-cut">
                                <span class="top-cut"></span>
                                <span class="bottom-cut"></span>
    
                              <form class="subscribe" method="post" action="{{route('storemailinglist')}}">
                                <!-- @csrf -->
                               <input id="mc-email" type="email" placeholder="Email Address" class="text-input" name="email">
                                <button type="submit">Submit</button>
                                </form>
                              </h2>
                                           <!-- Subscribe Form End -->
                                           <ul class="menu-link">
                                            <li><a class="" href="">Home</a></li>
                                            <li><a class="" href="">Contact</a></li>
                                           <!-- @if(count($categories)>0)
                                            @foreach($categories as $category) -->
                                            <!-- <li><a class="" href="">{{category.category}}</a></li>  -->
                                            <!-- @endforeach
                                            @endif 
                                            @guest -->
                                            <li><a class="">Login</a></li>
                                            <li><a class="">Register</a></li>
                                            <!-- @endguest  -->
                                         </ul>                        <p>© Copyright 2022. All rights reserved</p>
                           </footer>
                         </div>
                         <!-- Footer End -->
                       

</div>






                                 
                            
</template>
