<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('welcome') }}">Home</a>
            </li>
{{--            <li class="nav-item active">--}}
{{--            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('users.create') }}">New User</a>
                    <a class="dropdown-item" href="{{ route('users.index') }}">List Users</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                    Posts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('posts.create') }}">New Post</a>
                    <a class="dropdown-item" href="{{ route('posts.index') }}">List Posts</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

