<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## TASKS
<h4>Задание 1</h4>
<p>
php artisan make:model Name (Название модели должно соответствовать названию таблицы и быть с большой буквы.)
<br/>
php artisan make:migration create_name_table (Название таблицы должно быть в нижнем регистре и выглядить именно так.)
<br/>
php artisan make:controller NameController (Название контроллера начинается с большой буквы.)
<br/>
php artisan event:generate (Вариант для автоматического создание событий и их участников. Которые в свою очеред редактируется в провайдере событий.)
<br/>
php artisan make:event EventName (Отдельное создание событий)
<br/>
php artisan make:listener LisenerName (Отдельное создание участников событий)   
</p>
<h4>Задание 2</h4>
<p>
php artisan migrate (Запуск всех незавершенных миграций)
<br/>
php artisan migrate:rollback (Откат последней миграции)
<br/>
php artisan migrate:reset(Откат всех миграций) 
<br/>
php artisan migrate:refresh (Откат всех миграций с последующим накатом)
<br/>
php artisan queue:work (Запуск всех заданий по мере поступления их в очередь)
<br/>
hp artisan queue:work redis --queue=emails (Пример запуска конкретной очереди на базе redis)
</p>