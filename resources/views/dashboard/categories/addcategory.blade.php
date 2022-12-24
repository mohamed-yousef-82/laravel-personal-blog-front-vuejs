@extends('../dashboard/layout')
@section('content')
<section class="col-md-8">
  <h3 class="dash-page-title">
    <span>Add New Category</span>
</h3>
<hr />
<form action="{{route('storecategory')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control glasses" name="category" placeholder="Enter Your Category">
  </div>
  @error('category')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="submit" value="add new category" class="btn btn-success" />
</form>
</section>
@endsection
