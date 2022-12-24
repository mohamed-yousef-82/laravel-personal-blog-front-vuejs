
<aside class="col-md-2">
    <nav>
        <ul>
            <li>
                <img class="user-img" src="{{asset('uploads/'.$setting->image)}}" alt="">
            </li>
            <li>
              <p class="dash-username">{{Auth::user()->name}}</p> 
            </li>
            <li>
                <form action="{{route('search')}}" class="input-group search-form" method="get">
                    <input name="search" type="search" class="form-control glasses" placeholder="Search" />
                    <button type="submit" id="search-addon">
                      <i class="fa fa-search"></i>
                    </span>
                  </form>
            </li>
            <li>
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('showcategories')}}">Categories</a>
            </li>
            <li>
                <a href="{{route('showposts')}}">Posts</a>
            </li>
            <li>
                <a href="{{route('showcomments')}}">Comments</a>
            </li>
            <li>
                <a href="{{route('showmailinglist')}}">MailingList</a>
            </li>
            <li>
                <a href="{{route('setting')}}">Setting</a>
            </li>
            <li>
                <a href="/" target="_blank">Website</a>
            </li>
            <li>
                <a href="logout">Logout</a>
            </li>
        </ul>
    </nav>
</aside>