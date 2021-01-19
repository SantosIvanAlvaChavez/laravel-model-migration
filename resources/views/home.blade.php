@extends('layouts.main')

@section('content')
    <h1>The car of your dream </h1>

    <h2>Our Cars</h2>

    <ul>
        @foreach ($cars as $car)
        <li>
            <h3>{{ $car->modello }}</h3>
            <div class="brand">{{ $car->marca }}</div>
            <div class="plate">{{ $car->targa }}</div>
            {{-- Loop variable --}}
            @if (!$loop->last)
                <hr>
            @endif
        </li>
        @endforeach
    </ul>
