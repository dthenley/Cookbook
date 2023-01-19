<aside class="w-3/12 max-w-[10rem]">
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