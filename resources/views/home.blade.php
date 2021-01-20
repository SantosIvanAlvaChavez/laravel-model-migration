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

    <section id="app">
        <h2>Our Bikes App</h2>
        <ul>
            <li v-for="bike in bikes">
                <h3>@{{ bike.modello }}</h3>
                <div>@{{ bike.marca }}</div>
                <div>@{{ bike.targa }}</div>
                <div>@{{ bike.cavalli}}</div>
            </li>
        </ul>
    </section>
