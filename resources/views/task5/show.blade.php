@extends('layouts.base')

@section('page-title')
Тест {{ $test -> name }}
@endsection



@section('content')
<main class="w-50 mx-auto border border-dark">
    <h1 class="text-center"> Тест {{ $test -> name }}</h1>
    <table class="table" :table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Question</th>
                <th scope="col">Question Content</th>
            </tr>
        </thead>
        <tbody>
            @forelse($test -> questions as $question)
            <tr>
                <th scope="row">{{$question->id}}</th>
                <td><a href="{{route('task5.types', ['test'=>$test->id, 'question'=>$question->id] )}}">{{$question->name}}</a></td>
                <td><a href="{{route('task5.types', ['test'=>$test->id, 'question'=>$question->id] )}}">{{$question->content}}</a></td>
            </tr>
            @empty
            <h1> У теста нет вопросов </h1>
            @endforelse
        </tbody>
    </table>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>
@endsection