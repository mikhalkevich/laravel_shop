## About project
Laravel shop

## Used technologies
- MySQL
- JavaScript
- PHP, Laravel
## Installation

- git clone https://github.com/mikhalkevich/laravel_shop
- cd laravel_shop
- composer install
- создать базу данных
- создать файл .env, в нём подкючиться к базе данных
- php artisan migrate
- Раскоментировать нужные сиды и выполнить. Папка database/seeders/DatabaseSeeder.php и запустить сиды на выполнение php artisan db:seed
- php artisan serve
- Добавить товары в каталог с помощью маршрута http://localhost:8000/catalog_add_product/{catalog}?product_id={product} или (http://localhost:8000/catalog_add_product/1?product_id=3)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
