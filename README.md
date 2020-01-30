<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


# Laravel Restful API


## Install 
```C++
composer update

php artisan migrate

php artisan db:seed

php artisan serve
```

## Route List
```C++
php artisan route:list
```

## Postman
--postman Environment
#### Get Tocken
```C++
POST URL http://localhost:8000/oauth/token

Headers
    Accept:application/json
    Content-Type:application/json

Body
{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "ZJRxWA4e7zughtUgV4m1UmR89RqBhdYn69d0A8FV",
	"username" : "kessler.deanna@example.net",
	"password" : "password"
}
```

#### OAuth
```C++
GET URL http://localhost:8000/api/user
Headers
    Accept:application/json
    Content-Type:application/json
    Authorization:{{auth}}
```

#### Product List
```C++
GET URL http://localhost:8000/api/user
Headers
    Accept:application/json
    Content-Type:application/json
```

#### Product Create
```C++
POST URL http://localhost:8000/api/user
Headers
    Accept:application/json
    Content-Type:application/json
    Authorization:{{auth}}
    
Body
{
    "name": "I phon 8",
    "description": "The Best Porro incidunt blanditiis eius est doloribus explicabo. Omnis ratione repellat minus ducimus cumque. Ipsa inventore nemo accusamus accusantium ex ut. Libero deleniti natus occaecati.",
    "price": "100",
    "stock": "10",
    "discount": "50"
}
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
