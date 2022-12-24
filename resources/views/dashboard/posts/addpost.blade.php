@extends('../dashboard/layout')
@section('content')
<section class="col-md-8">
  <h3 class="dash-page-title">
    <span>Add New Post</span>
</h3>
<hr />
<form action="{{route('storepost')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    @if(count($categories) > 0)
    <select name="category_id" class="form-control glasses">
      @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ''}} >{{ $category->category }}</option>
      @endforeach  
    </select>
    @endif
    <input type="text" class="form-control glasses" name="title" placeholder="Enter Your Title" value={{old("title")}} >
    {{-- <div id="editor">{{old("details")}}</div> --}}
    <textarea  id="editor" name="details" class="form-control glasses" cols="30" rows="10">
        
    </textarea>
      {{-- <input type="hidden" id="quill_html" name="details"></input> --}}
    <input type="file" name="image" >
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <input type="submit" value="add new post" class="btn btn-success" />
</form>
</section>
@endsection
