<x-layout>
    <aside class="w-3/12 max-w-xs">
        <h3 class="text-lg lg:text-2xl">Cuisine Type:</h3>
        {{-- TO DO: Turn this into a dropdown for cuisines --}}
        <ul>
            @foreach($categories as $category)
                <li>
                <a href="/?category={{$category->slug}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>

        {{-- TO DO: Add Filtering for what foods to include. Preferably search function where you can bulk add, type select/check then find the next one --}}

        {{-- TO DO: Add range Slider for Calories filtering --}}
        {{-- TO DO: Add range Slider for Carbs filtering --}}
        {{-- TO DO: Add range Slider for Proteins filtering --}}
        {{-- TO DO: Add range Slider for Fat filtering --}}
    </aside>
    <div class="grid sm:grid-cols-2 2xl:grid-cols-3 gap-4">
        <h1 class="col-span-full text-xl lg:text-4xl ">Recipes</h1>
        {{-- TO DO: Add filters for more accurate search. Make it compound filtering where user can keep adding on filters then have the option to delete each one by one --}}
        @foreach ($recipes as $recipe)
            {{-- TO DO: extract these into their own blade directive ie. _recipe-card.blade.php --}}
            <article class="grid grid-cols-6 items-start gap-2 rounded-lg bg-slate-200 dark:bg-white text-slate-800">
                <a href="/recipes/{{$recipe->slug}}" class="col-span-2 p-3">
                    <img src="https://via.placeholder.com/100" width="100" height="100" alt="image of {{$recipe->title}}" class="rounded-full">
                </a>
                <div class="col-span-4 p-3">
                    <h2 class="text-lg ">
                        <a href="/recipes/{{$recipe->slug}}">
                            {{-- {{$recipe->title}} --}}
                            Title
                        </a>
                    </h2>
                    <p class="text-sm">
                        Posted on <time>January 17, 2023</time>
                    </p>
                    <p class="text-sm">
                        {{-- Add by <a href="/user/{{$recipe->user->username}}">{{$recipe->user->name}}</a> --}}
                        Added by Kayla Rose
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
        @endforeach
    </div>
</x-layout>
