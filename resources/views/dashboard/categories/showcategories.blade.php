@extends('../dashboard/layout')
@section('content')
    <section class="col-md-8">
        <h4 class="dash-page-title"><span>Categories</span></h4>
        <hr />
        <div class="container">
        <ul class="list-unstyled row two-columns">
        @forelse ($categories as $category)
        <li class="col-md-6 inline-list glasses">
        <div>
        <p>{{ $category->category }}</p>
        </div>
        <div class="controls">
        <a href="{{route('editcategory',$category->id)}}" title="edit"><i class="far fa-edit category-fa-edit"></i></a>
        <form action="{{route('deletecategory',$category->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit"  title="delete"><i class="far fa-times-circle"></i>
            </button>
        </form>
      </div>
      </li>
        @empty  
        <p class="alert alert-warning">no data to show</p>
        @endforelse    
        
</ul>
@if (session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Message :</strong> {{session()->get('message')}}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif
<a class="add-new-btn" title="add new category" href="{{route('addcategory')}}"><i class="fa fa-plus"></i></a>
</div>

    </section>
@endsection
