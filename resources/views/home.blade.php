@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('main_content')
    <h3>
        Ciao {{ $user['name'] }} {{ $user['lastname'] }}! Ecco sono i tuoi classi:
    </h3>
    <ul>
        @foreach ($classes as $class)
            <li>
                <h4>
                    Classe #{{ $class['number'] }}
                </h4>
                <p>Numero studenti: {{ $class['students_number'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
