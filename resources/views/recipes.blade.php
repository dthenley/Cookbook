<x-layout>
    <aside>
        <h3 class="text-lg lg:text-2xl">Cuisine Type:</h3>
        <ul>
            @foreach($categories as $category)
                <li>
                <a href="/category/{{$category->slug}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </aside>
    <div>
        <h1 class="text-xl lg:text-4xl">Recipes</h1>
        <p class="mb-4 mt-2">Results: {{count($recipes)}} recipes</p>
        @foreach ($recipes as $recipe)
            <article class="card">
                <h2 class="text-lg lg:text-2xl">
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
    </div>
</x-layout>
