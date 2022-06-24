@extends('layouts.app')

@section('title')
    News
@endsection

@section('custom_styles')
    <link rel="stylesheet" href="/css/news-style.css">
@endsection

@section('main_content')
    <h2>Ecco sono le ultime notizie</h2>

    {{-- $item = [
                'title' => 'Titolo 1',
                'content' => 'Lorem'
            ] --}}
    @foreach ($news as $item)
        {{-- @include('components.card', $item) --}}

        @include('components.card', [
            'number' => 'mio numero',
            'title' => $item['title'],
            'content' => $item['content'],
        ])
    @endforeach

    <h2> Ecco la lista dei prodotti</h2>

    @foreach ($products as $product)
        @include('components.card', [
            'number' => 'mio numero',
            'title' => $product['name'],
            'content' => $product['description'],
        ])
    @endforeach
@endsection
