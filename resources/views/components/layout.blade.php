<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white">
    <header class="border-b-2 max-w-full">
        <div class="container flex justify-between gap-4 py-4 px-2 mx-auto">
            <a href="/" class="text-2xl">Cookbook</a>
            <nav>
                <ul class="flex gap-3">
                    <li><a href="/recipes">Recipes</a></li>
                    <li><a href="/add-recipe">Add Recipe</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex gap-4 lg:gap-20 mt-6">
        {{$slot}}
    </main>
</body>
</html>