@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('clothes.search')}}" method="GET">
        <input type="text" name="searchData">
        <input type="submit">
    </form>

    @foreach ($clothes as $cloth)
    @if ($cloth->stock > 0)
    <a href="{{ route('clothes.show',$cloth->id) }}">
        <p>{{ $cloth->name }}</p>
        <img src="/storage/{{ $cloth->image }}">
        <p>{{ $cloth->price }}</p>
        <p>{{ $cloth->stock }}</p>
        <p>Store Name: {{ $cloth->store->first()->name }}</p>
    </a>
    @endif
    @endforeach

</div>
@endsection
