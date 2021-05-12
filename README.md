# evocms-artisan-generators

Перед использованием нужно заполнить в настройках сайта используемый namespace

```
Создать EVO контроллер
php artisan make:controller-evo TestController
core/custom/packages/<Your namespace>/src/Controllers/TestController

Создать Laravel контроллер
php artisan make:controller TestController
core/custom/packages/<Your namespace>/src/Controllers/TestController

Создать комманду Artisan
php artisan make:command TestCommand --command="command:name"
core/custom/packages/<Your namespace>/src/Console/TestCommand

Создать Eloquent модель
php artisan make:model Test
core/custom/packages/<Your namespace>/src/Models/Test

Создать seeder для базы
php artisan make:seeder TestSeeder
core/database/seeders/TestSeeder
```
