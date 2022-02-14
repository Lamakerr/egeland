@extends('layouts.base')

@section('page-title')
Задание №1-2
@endsection



@section('content')
<main class="bg-light mx-auto w-50 "> 
    <form action="{{ route('tasks3.store') }} " method="POST" class="mt-3">
    <div class="row justify-content-center">
    <div class="col-md-5 mb-3">
      <label for="validationDefault01">Имя</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Имя"  required>
      <label for="validationDefault05"></label>
       </div>
       <div class="col-md-4 mb-3">
      <label for="validationDefault05">Пароль</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
    </div>
  <div class="row">
    <div class="col-md-5 mb-3">
      <label for="validationDefault03">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="nubmer" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">VK URL</label>
      <input type="text" class="form-control" id="vk_url" name="vk_url" placeholder="url" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">EMAIL</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
    </div>
  </div>
</div>
<div class="text-center mt-3 mb-3">
<button class="btn btn-primary text-center  col-md-3" type="submit">Отправить форму</button>
</div>
@csrf
</form>
<p class="text-center"><a href="{{url()->previous()}}"> Назад</a></p>
</main>

@endsection