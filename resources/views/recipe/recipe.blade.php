<x-layout>
    <article class="flex gap-3">
        <img src="https://via.placeholder.com/400x500" width="400" height="500" alt="image of {{$recipe->title}}" class="rounded">
        <div>
            <header>
                <h1 class="text-xl lg:text-4xl">
                        {{$recipe->title}}
                </h1>
                <p>
                    <a href="?category={{$recipe->category->slug}}" class="border rounded px-2 py-px">
                        {{$recipe->category->name}}
                    </a>
                </p>
            </header>
            <div class="col-span-full grid grid-cols-2 lg:grid-cols-4 gap-px  self-end text-center  border border-inherit rounded overflow-hidden">
                    <div class="bg-slate-200 dark:bg-white text-slate-800  p-1">
                        <h3>Calories</h3>
                        <p>300</p>
                    </div>
                    <div class="bg-slate-200 dark:bg-white text-slate-800  p-1">
                        <h3>Carbs</h3>
                        <p>300</p>
                    </div>
                    <div class="bg-slate-200 dark:bg-white text-slate-800  p-1">
                        <h3>Protein</h3>
                        <p>300</p>
                    </div>
                    <div class="bg-slate-200 dark:bg-white text-slate-800  p-1">
                        <h3>Fat</h3>
                        <p>300</p>
                    </div>
                </div>
            {!!$recipe->body!!}
        </div>
    </article>
</x-layout>
