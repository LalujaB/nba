<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($teams as $team)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{ route('single-team', ['id' => $team->id]) }}">{{ $team->name }}</a></h2>


        </div>
    @endforeach
</body>
</html>