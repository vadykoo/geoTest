## Video


[![Watch the video](https://siamscuba.com/wp-content/uploads/2015/09/WatchVideo-1.gif)](https://youtu.be/OdnR7D77ePQs)

## How to deploy
composer install

copy yourself a .env file

Create a database

change database info and update tokens

DB_USERNAME = 

DB_PASSWORD = 

IPINFO_SECRET=

OPENWEATHER_SECRET=

php artisan migrate --seed

change is_admin field in database users table to true for your user after registration

php artisan serve

npm install

npm run dev

## Test assignments

```
Test assignments for the position of PHP-developer
Task: to develop a service for placing objects on the map.


The service should have the following functionality: administrative and user sections.
The administrative section should include:
1. Creation of an object with fields: name, coordinates, description, status (displayed for all or only authorized users).
2. Ability to edit and delete an object.


The user section should include:
1. Displaying an object on the map with a name and description.
2. Search form for objects by name and description.
3. Registration and authorization of users.
Implement the user interface in any form.

------------------------------------------

Тестовое задания на позицию PHP-разработчик
Задача: разработать сервис размещения объектов на карте.


Сервис должен иметь следующий функционал: административный и пользовательский разделы.
Административный раздел должен включать:
1. Создание объекта с полями: имя, координаты, описание, статус (отображается для всех или только авторизованным пользователям).
2. Возможность редактирования и удаления объекта.


Пользовательский раздел должен включать: 
1. Отображение объекта на карте с именем и описанием.
2. Форма поиска объектов по имени и по описанию.
3. Регистрация и авторизация пользователей.
Пользовательский интерфейс реализовать в произвольной форме.
