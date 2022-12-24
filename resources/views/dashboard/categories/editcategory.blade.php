@extends('../dashboard/layout')
@section('content')
<section class="col-md-8">
  <h3 class="dash-page-title">
    <span>Edit Category</span>
</h3>
<hr />
<form action="{{route('updatecategory',$category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control glasses" name="category" placeholder="{{$category->category}}">
  </div>
  @error('category')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="submit" value="Update Category" class="btn btn-primary" />
</form>
</section>
@endsection
