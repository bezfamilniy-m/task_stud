<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic ШАБЛОН</h1>
    <br>
</p>

Yii 2 Basic Project Template был выбран в качестве скелетона для тестового задания  [Yii 2](http://www.yiiframework.com/) ЖУРНАЛ УСПЕВАЕМОСТИ СТУДЕНТОВ.


СТРУКТУРА КАТАЛОГОВ
-------------------

  | -/backend/-*	
  |           |-/assets/             содержит определения активных частей приложения
  |           |-/commands/           консольные команды контроллеров yii2
  |           |-/config/             конфигурационные фалы языковых настроек и файла доступа к БД, БД называется
  |           |-/controllers/        классы для Контроллеров паттерна MVC yii2
  |           |-/mail/               файлы представлений для e-mails
  |           |-/models/             классы моделей паттерна MVC фрэймворка yii2
  |           |-/runtime/            директория выполения приложения runtime (0777 права)
  |           |-/tests/              первичные сценарии авто-тестов с codeception
  |    	      |-/vendor/             зависимости пакетов дополнительных прилдожений yii2
  |    	      |-/views/              представления паттерна MVC 
  |-/public/-*                       директория в которую смотрит web-сервер(0777 права) соджержит ямл докера и файл для vagrant
	     |-/assets/              содержит определения активных частей приложения
	     |-/css/                 стили и т.п.

БД и версия РНР
----------------

PHP 7.2.

CREATE DATA BASE stud_db; --БД

--создание таблички студентов
CREATE TABLE public.students
(
    id serial PRIMARY KEY NOT NULL,
    name varchar(128),
    family varchar(128),
    patronymic varchar(128),
    year_stud int,
    column_6 int
);
CREATE UNIQUE INDEX students_id_uindex ON public.students (id);
--создание таблички предметов (курсов)
CREATE TABLE public.subjects
(
    id int PRIMARY KEY,
    id_student int,
    title_course varchar(512),
    mark int
);
CREATE UNIQUE INDEX subjects_id_uindex ON public.subjects (id);


УСТАНОВКА
------------

### УСТАНОВКА ЧЕРЕЗ GIT

Достаточно склонировать данную ветку [GIT](https://github.com/bezfamilniy-m/task_stud/), подробнее об уставновке можете прочитать на сайте github.com
команда
~~~
$git clone https://github.com/bezfamilniy-m/task_stud.git
~~~
Запуск модет быть осуществлен при соответствующих настройках web-сервера
~~~
http://localhost/project_dir/public/
~~~

### Установка через .ZIP

Скачайте архив с [GIT](https://github.com/bezfamilniy-m/task_stud/), с сайта github.com

КОНФИГУРАЦИЯ БД
---------------

### Database

Отредактируйте файл `backenfd/config/db.php` :

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=stud_db',
    'username' => 'пользователь вашей БД',
    'password' => 'пароль етого пользователя',
    'charset' => 'utf8',
];
```
