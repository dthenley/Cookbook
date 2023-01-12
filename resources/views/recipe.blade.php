@extends('layout')

@section('content')
    <article>
        <h1>
                {{$recipe->title}}
        </h1>
        {!!$recipe->body!!}
    </article>
@endsection