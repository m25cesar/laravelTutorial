<div class="blog-masthead">
    <div class="container">
    <nav class="nav blog-nav">
        <a class="nav-link active" href="{{ route('home') }}">Home</a>
        
        @if(Auth::check())
            <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        @else
            <a class="nav-link" href="{{ route('register') }}">Register</a>
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        @endif
    </nav>
    </div>
</div>