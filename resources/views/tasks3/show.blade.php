@extends('layouts.base')


@section('content')
<main class="w-50 mx-auto border border-dark">
    <table class="table" :table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">phone</th>
                <th scope="col">vk url</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userlogs as $userlog)
            <tr>
                <th scope="row">{{$userlog->id}}</th>
                <td>{{$userlog->phone}}</td>
                <td>{{$userlog->vk_url}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('download')}}">Скачать лог</a>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>


@endsection