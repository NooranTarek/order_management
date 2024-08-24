<h1 style="text-align: center; color: #3498db;">Laravel CRUD for Categories and Products</h1>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-10.x-red?style=flat-square">
    <img src="https://img.shields.io/badge/PHP-%3E=8.1-blue?style=flat-square">
    <img src="https://img.shields.io/badge/Composer-%3E=2.0-green?style=flat-square">
    <img src="https://img.shields.io/badge/MySQL-%3E=5.7-blue?style=flat-square">
</p>

<h2 style="color: #2c3e50;">📄 Project Description</h2>
<p>This is a simple Laravel project that provides CRUD (Create, Read, Update, Delete) operations for categories and products. Postman documentation has been prepared to facilitate API testing.</p>

<h2 style="color: #2c3e50;">✨ Features</h2>
<ul>
    <li>CRUD operations for Categories</li>
    <li>CRUD operations for Products</li>
    <li>API documentation available via Postman</li>
</ul>

<h2 style="color: #2c3e50;">🚀 Prerequisites</h2>
<ul>
    <li><strong>PHP</strong> version >= 8.2</li>
    <li><strong>Composer</strong> version >= 2.0</li>
    <li><strong>Node.js</strong> version >= 16.x (if using npm)</li>
    <li><strong>Laravel</strong> version >= 11.9</li>
    <li><strong>MySQL</strong> version >= 5.7 </li>
</ul>

<h2 style="color: #2c3e50;">⚙️ Installation Instructions</h2>
<ol>
    <li><strong>Clone the Repository:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">git clone git@github.com:NooranTarek/product_management_Laravel.git
cd your-repo-name</pre>
    </li>
    <li><strong>Install Dependencies:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">composer install</pre>
    </li>
    <li><strong>Copy .env file:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">cp .env.example .env</pre>
    </li>
    <li><strong>Configure Database:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password</pre>
    </li>
    <li><strong>Run Migrations:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">php artisan migrate</pre>
    </li>
    <li><strong>Seed the Database (Optional):</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">php artisan db:seed</pre>
    </li>
    <li><strong>Serve the Application:</strong>
        <pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">php artisan serve</pre>
    </li>
    <li><strong>Run Postman Documentation:</strong>
        <p>Open the Postman documentation file you created and use it to test the API.</p>
    </li>
</ol>

<h2 style="color: #2c3e50;">📑 API Documentation</h2>
<p>Postman collection has been prepared to make API testing easier for developers. You can find the Postman collection file here [Download JSON File](https://drive.google.com/file/d/1-Ra4VzaXU5ud1frWooCJ6yEk1ky9wIjt/view?usp=sharing)
</p>


<footer style="text-align: center; padding-top: 20px;">
    <p style="color: #95a5a6;">Made with ❤️ by <a href="https://github.com/username" style="color: #3498db; text-decoration: none;">Nouran Tarek</a></p>
</footer>


_____________________________________________________________________________________________________
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
