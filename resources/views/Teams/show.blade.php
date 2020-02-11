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
        <h2 class="blog-post-title">{{ $team->name }}</h2>

        <p class="blog-post-meta"><strong>Email: </strong><a href="mailto:{{ $team->email }}">{{ $team->email }}</a></p>

        <p class="blog-post-meta"><strong>Address:</strong> {{ $team->address }}</p>

        <p class="blog-post-meta"><strong>City:</strong> {{ $team->city }}</p>

        <p class="blog-post-meta"><strong>{{ $team->name }} players:</strong></p>

        <ul>
            @foreach ($team->players as $player)
                <li>
                    <a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a></p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>