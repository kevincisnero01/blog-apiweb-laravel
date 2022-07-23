<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Laravel Post</h1>

        @foreach($posts as $post)
            <h2>{{ $post->title }}</h2>
        @endforeach
        {{ $posts->links() }}
    </body>
</html>
