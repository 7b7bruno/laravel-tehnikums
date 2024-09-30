<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single post view</title>
</head>
<body>
    <h1>Post: {{ $singlepost->id }}</h1>
    <div class="post_container">
        <p>{{ $singlepost->author }}</p>
        <p>{{ $singlepost->title }}</p>
        <p>{{ $singlepost->content }}</p>
    </div>
    <a href="/posts">Back</a>
</body>
</html>