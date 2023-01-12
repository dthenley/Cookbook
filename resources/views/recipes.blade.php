<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <header>
        <h1>Cookbook</h1>
    </header>
    @foreach ($recipes as $recipe)

        There are {{$loop->count}} recipes
        <article>
            <h2>
                <a href="/recipes/{{$recipe->slug}}">
                    {{$recipe->title}}
                </a>
            </h2>
            {!!$recipe->body!!}
        </article>
    @endforeach
</body>
</html>