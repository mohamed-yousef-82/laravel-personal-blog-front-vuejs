@extends('website/layout')

@section('content')
                  <div class="col-md-9">
                     <div class="col-md-12 page-body">
                               <!-- Contact Me Start -->
                               <div class="post-title margin-top-70">
                                 <h1>Contact <span class="main-color">Me</span></h1>
                                </div>
                                  
                                  
 
           
        
                               <div class="row margin-top-30">
                                 <div class="col-md-12">   
                
                                 <div class="row">
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
                                  <form action="{{route('sendmail')}}" method="post">
                                    @csrf
                   
                              <div class="col-sm-6">
                               <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                               </div>
                                    </div>
                       
                                   <div class="col-sm-6">
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                               </div>
                                    </div>
                       

                         
                                   <div class="col-sm-12">
                               <div class="form-group">
                               <input type="text" name="title" class="form-control" placeholder="Title">
                               </div>
                                    </div>
                       
                       
                                   <div class="col-sm-12">
                                <div class="textarea-message form-group">
                                  <textarea name="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
                             </div>
                                  </div>
                  
                                  <div class="col-sm-12">
                               <div class="text-left">      
                               <button type="submit" class="btn btn-primary" style="margin-bottom:20px ">Send</button>
                               </div>
                              </div>

                                </form>
                               </div>
                             </div>
                            </div>
                            <!-- Contact Me End -->
                          </div>
                   <!-- Blog Post (Right Sidebar) End -->
                   @endsection