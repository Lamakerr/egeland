@extends('layouts.base')

@section('page-title')
Вопрос {{ $question -> name }}
@endsection



@section('content')
<main class="w-50 mx-auto border border-dark">
    <h1 class="text-center"> Вопрос {{ $question -> name }}</h1>
    <table class="table" :table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @forelse($question -> types as $type)
            <tr>
                <th scope="row">{{ $type -> id }}</th>
                <td><a href="">{{ $type->name }}</a></td>
            </tr>
            @empty
            <h1> У вопроса нет типа</h1>
            @endforelse
        </tbody>
    </table>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>
@endsection