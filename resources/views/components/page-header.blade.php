<h1 class="text-xl lg:text-4xl mb-3">Recipes</h1>
@php
$requests = request()->all()
@endphp

@if( count($requests)>0 )
    <p class="flex gap-1 mb-3">
        @foreach($requests as $key => $request)
            @php
                $delete_link = str_replace("$key=$request", '', request()->fullUrl());
            @endphp
            <small class="bg-slate-200 dark:bg-white text-slate-800 border rounded py-px px-2">
                {{ $request }}
                <a href="{{$delete_link}}">X</a>
            </small>
        @endforeach
        <a href="/" class="underline"><small>Clear All</small></a>
    </p>
@endif