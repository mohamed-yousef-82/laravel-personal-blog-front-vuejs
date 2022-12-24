
    <aside class="col-md-2">
        {{-- <nav>
            <ul>
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
                    <a href="{{route('showcategories')}}">Comments</a>
                </li>
                <li>
                    <a href="{{route('setting')}}">Setting</a>
                </li>
            </ul>
        </nav> --}}
        <ul id="statistics-container">
            <li>
                <div class="statistics">
                    <div class="statistics-inner">
                  <p>{{count($posts)}}</p>
                </div>
                </div>
                <a href="{{route('showposts')}}">Posts</a>
                <div class="statistics-border"></div>
            </li>
            <li>
                <div class="statistics">
                    <div class="statistics-inner">
                  <p>{{count($categories)}}</p>
                </div>
                </div>
                <a href="{{route('showcategories')}}">Categories</a>
                <div class="statistics-border"></div>
            </li>
            <li>
                <div class="statistics">
                    <div class="statistics-inner">
                  <p>{{count($comments)}}</p>
                </div>
                </div>
                <a href="">Comments</a>
                <div class="statistics-border"></div>
            </li>
            {{-- <li>
                <a href="{{route('showposts')}}">Posts</a>
                                <a href="{{route('showcategories')}}">Categories</a>

            </li>
            <li>
                <a href="{{route('showcategories')}}">Comments</a>
            </li>
            <li>
                <a href="{{route('setting')}}">Setting</a>
            </li> --}}
        </ul>
       
    </aside>