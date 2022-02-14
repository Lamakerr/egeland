@extends('layouts.base')


@section('content')
<main class="w-50 mx-auto border border-dark">
    <table class="table" :table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">vk url</th>
                <th scope="col">test</th>
                <th scope="col">настройка</th>
                <th scope="col">курс</th>

            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
           
        
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->vk_url}}</td>
                @forelse($user->tests as $test)
                <td>{{$test->name}}</td>
                @empty
                <td> У юзера нет теста</td>
                @endforelse
                @forelse($user->settings as $setting)
                <td>{{$setting->id}}</td>
                @empty
                <td> У юзера нет настроек</td>
                @endforelse
                @forelse($user->courses as $course)
                <td>{{$course->id}}</td>
                @empty
                <td> У юзера нет курса</td>
                @endforelse
                @endforeach
                
            </tr>

        </tbody>
    </table>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>


@endsection