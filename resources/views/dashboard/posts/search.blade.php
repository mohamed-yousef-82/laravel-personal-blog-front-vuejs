@extends('../dashboard/layout')
@section('content')
    <section class="col-md-8">
        <h3 class="dash-page-title">
            <span>Search Results</span>
        </h3>
        <hr />
        <div class="container">
        <ul class="list-unstyled row">
        @forelse ($posts as $post)
        <li class="col-md-6">
        <div class="post-details">
            <div class="post-img-container">
                <img class="dash-post-img" src="{{asset('uploads/'.$post->image)}}" alt="">
            </div>
        <div class="info-row">
            <p><i class="fa fa-calendar"></i>{{ $post->created_at}}</p>
            @if($post->category)
            <p><i class="fa fa-book"></i>{{ $post->category->category}}</p>   
            @endif 
        </div>
        <h4 class="post-title">{{ $post->title }}</h4>
        <p> {{ substr($post->details, 0,  300) }} ...</p>
       
        <div class="post-footer">
        <p><i class="fa fa-user"></i>{{ $post->user->name}}</p>
        <div class="controls">
            <a href="{{route('editpost',$post->id)}}" title="edit"><i class="far fa-edit"></i></a>
            <form action="{{route('deletepost',$post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit"  title="delete"><i class="far fa-times-circle"></i>
                </button>
            </form>
        </div>
        </div>
        </div>

   </li>
    @empty
    <p class="alert alert-warning">no data to show</p>
    @endforelse       
    @if (session()->has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Message :</strong> {{session()->get('message')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
</ul>
<a class="add-new-btn" title="add new post" href="{{route('addpost')}}"><i class="fa fa-plus"></i></a>
</div>
    </section>
@endsection
