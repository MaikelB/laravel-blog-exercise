<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TEST</title>
</head>
<body>
    @if(count($posts) == 0)
        <h1> No posts to show. Would you like to make one?</h1>
        <a class="btn btn btn-danger btn-lg" href="/posts/new" role="button">Create a post</a>
    @elseif(count($posts) == 1)
        <a class="btn btn btn-danger btn-lg" href="/posts/new" role="button">Create a post</a>
        <div class="jumbotron">
        <h1 class="display-4">#{{ $posts[0]->id }} {{ $posts[0]->title }}</h1>
        <p class="lead">{{ $posts[0]->content }}</p>

        <a class="btn btn btn-danger btn-lg" href="/posts/edit/{{ $posts[0]->id }}" role="button">Edit post</a>
        <a class="btn btn btn-warning btn-lg" href="/posts/delete/{{ $posts[0]->id }}" role="button">Delete post</a>
        </div>
    @else
        <a class="btn btn btn-danger btn-lg" href="/posts/new" role="button">Create a post</a>
        @foreach($posts as $post)
            <div class="jumbotron">
            <h1 class="display-4">#{{ $post->id }} {{ $post->title }}</h1>
            <p class="lead">{{ $post->content }}</p>

            <a class="btn btn btn-danger btn-lg" href="/posts/edit/{{ $post->id }}" role="button">Edit post</a>
            <a class="btn btn btn-warning btn-lg" href="/posts/delete/{{ $post->id }}" role="button">Delete post</a>
            </div>
        @endforeach 
    @endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>