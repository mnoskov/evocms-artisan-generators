# evocms-artisan-generators

Перед использование нужно заполнить в настройках сайта используемый namespace

```
php artisan make:controller TestController
core/custom/packages/<Your namespace>/src/Controllers/TestController

php artisan make:command TestCommand --command="command:name"
core/custom/packages/<Your namespace>/src/Console/TestCommand

php artisan make:model Test
core/custom/packages/<Your namespace>/src/Models/Test

php artisan make:seeder TestSeeder
core/database/seeders/TestSeeder
```
