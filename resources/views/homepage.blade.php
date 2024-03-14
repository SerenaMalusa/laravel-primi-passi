<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>

<body>

    <h1>{{ $title }}</h1>
    <p>{{ $paragraph }}</p>

    <hr>

    <ul>
        @forelse($greetings as $greeting)
        <li>{{ $greeting }}</li>
        @empty
        <li>ciao ciao!</li>
        @endforelse
    </ul>

</body>

</html>