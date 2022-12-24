@extends('../dashboard/layout')
@section('content')
<section class="col-md-8">
  <h3 class="dash-page-title">
    <span>Edit Profile</span>
</h3>
{{-- {{dd($setting)}} --}}
  <section class="col-md-12">
    <form class="profile-form" action="{{route('settingupdate')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label>Blog Name / Or Blogger Name :</label>
        <input type="text" class="form-control glasses" name="name" value="{{$setting->name}}">
        <label>Blog Field / Or Blogger job :</label>
        <input type="text" class="form-control glasses" name="job" value="{{$setting->job}}">
        {{-- <label>Email :</label>
        <input type="email" class="form-control glasses" name="email" value="@isset($setting->email)@endisset"> --}}
        <label>Faebook Link :</label>
        <input type="link" class="form-control glasses" name="facebook" value="{{$setting->facebook}}">
        <label>Twitter Link :</label>
        <input type="link" class="form-control glasses" name="twitter" value="{{$setting->twitter}}">
        <label>Youtube Link :</label>
        <input type="link" class="form-control glasses" name="youtube" value="{{$setting->youtube}}">
        <label>Instagram Link :</label>
        <input type="link" class="form-control glasses" name="instagram" value="{{$setting->instagram}}">
        <label>Photo :</label>
        <img class="uploaded-profile-img" src="{{asset('uploads/'.$setting->image)}}" alt="">
        <input type="file" name="image">
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
      <input type="submit" value="Update Profile" class="btn btn-success" />
    </form>
    @if (session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Message :</strong> {{session()->get('message')}}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif
</section>
</section>
@endsection
