<x-layout>
    @include ('recipe._sidebar-filter')

    <div>
        <h1 class="text-xl lg:text-4xl mb-3">Recipes</h1>
        {{-- TO DO: Add filters for more accurate search. Make it compound filtering where user can keep adding on filters then have the option to delete each one by one --}}
        @if ($recipes->count())
            <div class="grid sm:grid-cols-2 2xl:grid-cols-3 gap-4">
                @foreach ($recipes as $recipe)
                    <x-recipe-card :recipe="$recipe" />
                @endforeach
            </div>
        @else
            <h3>No Recipes Found</h3>
        @endif
    </div>
</x-layout>
