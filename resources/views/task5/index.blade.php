@extends('layouts.base')

@section('page-title')
Задание №5
@endsection



@section('content')
<main class="w-50 mx-auto border border-dark">
    <table class="table" :table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Test</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tests as $test)
            <tr>
                <th scope="row">{{$test->id}}</th>
                <td><a href="{{route('task5.show', $test -> id)}}">{{$test->name}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>

@endsection