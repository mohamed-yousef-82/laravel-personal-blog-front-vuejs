@extends('../dashboard/layout')
@section('content')
<section class="col-md-8">
  <h3 class="dash-page-title">
    <span>Edit Post</span>
</h3>
  <section class="col-md-12">
    <form  class="post-edit-form" action="{{route('updatepost',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="usr">Posts</label>
        <select name="category_id" class="form-control glasses">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
          @endforeach  
        </select>
        <input type="text" class="form-control glasses" name="title" value="{{$post->title}}">
        {{-- <textarea id="editor" name="details" class="form-control glasses" cols="30" rows="10">{{ $post->details }}</textarea> --}}
        {{-- <div id="editor">{!! $post->details !!}</div> --}}
        <textarea id="editor" name="details" class="form-control glasses" cols="30" rows="10">
          {!! $post->details !!}
        </textarea>
          {{-- <input type="hidden" id="quill_html" name="details"></input> --}}
        <label>Image :</label>
        <img class="uploaded-post-img" src="{{asset('uploads/'.$post->image)}}" alt="">
        <input type="file" name="image">
      </div>
      <input type="submit" value="Update Post" class="btn btn-success" />
    </form>
</section>
</section>
@endsection
