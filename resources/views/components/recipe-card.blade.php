@props(['recipe'])

<article class="grid grid-cols-6 items-start gap-2 rounded-lg bg-slate-200 dark:bg-white text-slate-800">
    <a href="/recipes/{{$recipe->slug}}" class="col-span-2 p-3">
        <img src="https://via.placeholder.com/100" width="100" height="100" alt="image of {{$recipe->title}}" class="rounded-full">
    </a>
    <div class="col-span-4 p-3">
        <h2 class="text-lg ">
            <a href="/recipes/{{$recipe->slug}}">
                {{$recipe->title}}
            </a>
        </h2>
        <p class="text-sm">
            Posted on <time>January 17, 2023</time>
        </p>
        <p class="text-sm">
            Add by <a href="/user/{{$recipe->user->username}}">{{$recipe->user->name}}</a>

        </p>
        <p>
            <a href="/recipes/{{$recipe->slug}}" class="underline ">
                View Recipe
            </a>
        </p>
    </div>
    <div class="col-span-full grid grid-cols-2 lg:grid-cols-4 gap-px  self-end rounded-b-lg overflow-hidden text-center  border border-inherit">
        <div class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white p-1">
            <h3>Calories</h3>
            <p>300</p>
        </div>
        <div class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white p-1">
            <h3>Carbs</h3>
            <p>300</p>
        </div>
        <div class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white p-1">
            <h3>Protein</h3>
            <p>300</p>
        </div>
        <div class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white p-1">
            <h3>Fat</h3>
            <p>300</p>
        </div>
    </div>
</article>