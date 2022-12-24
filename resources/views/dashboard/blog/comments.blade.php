@extends('../dashboard/layout')
@section('content')
    <section class="col-md-8">
        <h4 class="dash-page-title"><span>Comments</span></h4>
        <hr />
        <ul class="list-unstyled row comments">
        @forelse ($comments as $comment)
        <li class="col-md-12">
        <div class="glasses">
          <h4>{{ $comment->name }}</h4>

        <p>{{ $comment->comment}}</p>
        </div>
        <div class="controls">
          @if($comment->approved == 0 )
          <form action="{{route('approvecomment',$comment->id)}}" method="post">
            @csrf
            <button class="btn btn-success" type="submit"  title="delete">Approve
            </button>
        </form>
        @endif
        <form action="{{route('deletecomment',$comment->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"  title="delete">Delete
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

    </section>
@endsection
