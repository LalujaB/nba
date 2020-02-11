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
    <div class="blog-post">
    <h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p class="blog-post-meta">{{ $player->email }}</p>
    <p class="blog-post-meta"><strong>Team:</strong>{{ $player->team->name}}</p>
    </div>

</body>
</html>