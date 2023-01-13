<x-layout>
    <article>
        <h1>
                {{$recipe->title}}
        </h1>
       <p>
            <a href="/category/{{$recipe->category->slug}}">
                {{$recipe->category->name}}
            </a>
        </p>
        {!!$recipe->body!!}
    </article>
</x-layout>
