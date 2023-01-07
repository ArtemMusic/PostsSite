# Первый опыт в создании продукта на фреймворке Laravel.

https://saint-craft.ru

## Цель проекта

Цель проекта: Изучение основных и необходимых технологий в разработке современных сайтов,
получение практического опыта, написание своей документации.

## Ключевые особенности

Авторизация, crud, база данных, современные технологии, bootstrap, применение паттернов. 
Сайт реализован на фреймворке Laravel 9, php 8.1.

!Конфигурацию бд смотреть в миграциях
!Для использования подключить бд, создать .env, выполнить composer install, npm install, php artisain migrate --seed, зарегестрировать аккаунт, поменять через бд роль на admin для использования AdminLTE.

Админ: root@mail.ru rootroot

Реализовывая данный сайт я освоил как в теории, так и на практике следующие аспекты:

1) Язык PHP 7/8
2) MySQL, а также реляционные и не реляционные базы данных
3) Отношения один к одному / один ко многим / многие ко многим
4) Laravel 8/9 и его особенности
5) Composer
6) Npm
7) Паттерны SOLID и MVC
8) Этапы создания и проектирования программного продукта
9) Bootstrap
10) Реализация АдминПанели
11) Ассинхронные запросы
12) Научился создавать RestfulAPI
13) Освоил технологию JWT токена
14) Начал осваивать CRUD с транзакциями 
15) Написал свою документацию (см репозиторий LaravelDoc)

Сделаны следующие страницы: просмотра постов, создание постов, редактирования, удаления.

Модель MVC построена на однометодных контроллерах, сервисах. Отдельно реализованы реквесты. Бд заполнена через factory & seeders. Продумана система фильтрации и пагинации, установлена AdminLTE. Также предусмотрена система распределения пользователей на admin/user через middleware & policy. Втроенны ассинхронные запросы через JWT токен, а также RestfulAPI.
