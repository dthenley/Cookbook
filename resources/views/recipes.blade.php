<x-layout>
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
             <p>
                <a href="/category/{{$recipe->category->slug}}">
                    {{$recipe->category->name}}
                </a>
            </p>
            <p>
                Add by <a href="/user/{{$recipe->user->username}}">{{$recipe->user->name}}</a>
            </p>
            {!!$recipe->excerpt!!}
        </article>
    @endforeach
</x-layout>
