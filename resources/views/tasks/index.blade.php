@extends('layouts.base')

@section('page-title')
Задание №1-2
@endsection



@section('content')
<main class="text-center d-flex flex-column border border-dark w-50 mx-auto bg-light">
    <h4>Задание 1</h4>
    <p>
        php artisan make:model Name (Название модели должно соответствовать названию таблицы и быть с большой буквы.)
        <br />
        php artisan make:migration create_name_table (Название таблицы должно быть в нижнем регистре и выглядить именно так.)
        <br />
        php artisan make:controller NameController (Название контроллера начинается с большой буквы.)
        <br />
        php artisan event:generate (Вариант для автоматического создание событий и их участников. Которые в свою очеред редактируется в провайдере событий.)
        <br />
        php artisan make:event EventName (Отдельное создание событий)
        <br />
        php artisan make:listener LisenerName (Отдельное создание участников событий)
    </p>
    <h4>Задание 2</h4>
    <p>
        php artisan migrate (Запуск всех незавершенных миграций)
        <br />
        php artisan migrate:rollback (Откат последней миграции)
        <br />
        php artisan migrate:reset(Откат всех миграций)
        <br />
        php artisan migrate:refresh (Откат всех миграций с последующим накатом)
        <br />
        php artisan queue:work (Запуск всех заданий по мере поступления их в очередь)
        <br />
        php artisan queue:work redis --queue=emails (Пример запуска конкретной очереди на базе redis)
    </p>
    <p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>
@endsection