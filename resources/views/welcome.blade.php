@extends('layouts.base')


@section('content')
<main class="text-center d-flex flex-column border border-dark w-50 mx-auto bg-light">
    <div class="p-2">
        <a href="{{ route('tasks') }}">Задание №1-2</a>
    </div>
    <div class="p-2">
        <a href="{{ route('tasks3') }}">Задание №3 </a>
    </div>
    <div class="p-2">
        <a href="{{ route('tasks3.show') }}">Задание №4 </a>
    </div>
    <div class="p-2">
        <a href="{{ route('task5') }}">Задание №5 </a>
    </div>
    <div class="p-2">
        <a href="{{ route('tasks3.data') }}">Задание №6 </a>
    </div>
    <div class="p-2">
        <a href="{{ route('ajax.index') }}">Задание №7 </a>
    </div>
    <div class="p-2">
        <a href="{{ route('paint') }}"> Практическое задание </a>
    </div>
</main>
@endsection