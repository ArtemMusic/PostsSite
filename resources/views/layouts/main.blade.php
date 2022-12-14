<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--  -->
    <title>SaintPosts</title>
</head>

<body>
    <div class="container">
        <header class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('post.index')}}">Saint-Posts</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            @can('view', auth()->user())
                                <a class="nav-link active" aria-current="page" href="{{route('post.create')}}">Создать пост</a>
                            @endcan
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="row">
            @yield('content')
        </main>
    </div>
</body>

</html>