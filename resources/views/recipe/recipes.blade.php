<x-layout>
    @include ('recipe._sidebar-filter')

    <div class="grid sm:grid-cols-2 2xl:grid-cols-3 gap-4">
        <h1 class="col-span-full text-xl lg:text-4xl ">Recipes</h1>
        {{-- TO DO: Add filters for more accurate search. Make it compound filtering where user can keep adding on filters then have the option to delete each one by one --}}
        @foreach ($recipes as $recipe)
            <x-recipe-card :recipe="$recipe" />
        @endforeach
    </div>
</x-layout>
