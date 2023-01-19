
<x-layout>
    @include ('recipe._sidebar-filter')

    <div class="grow">
        @include ('components.page-header')

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
