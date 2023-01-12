<x-layout>
    <header>
        <h1>Cookbook</h1>
    </header>
    @foreach ($recipes as $recipe)

        There are {{$loop->count}} recipes
        <article>
            <h2>
                <a href="/recipes/{{$recipe->id}}">
                    {{$recipe->title}}
                </a>
            </h2>
            {!!$recipe->body!!}
        </article>
    @endforeach
</x-layout>
