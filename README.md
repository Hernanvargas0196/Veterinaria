<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proceso de Instalación de Veterinaria en un ambiente local

1 - En primer lugar se debe clonar el repositorio veterinaria en la carpeta que se desee (tener en cuenta que al momento de usar base de datos mysql usamos en este caso wampServer) por lo que se debe instalar en la carpeta 'www'.

2 - Despues se accede a la cmd desde la carpeta en donde se clono el repositorio y se instala composer (https://www.youtube.com/watch?v=yyJjHsnWow8)


3 - Observamos que no aparece nuestra carpeta .env pero aparece .env.example asi que la duplicamos y la dejamos como nuestro archivo .env en donde haremos la configuracion correspondiente para conectar a la base de datos por medio del gestor de eleccion.

4 - Se crea la base de datos 'veterinaria' para realizar las migraciones posteriormente.

5 - En el archivo .env observamos que no se encuentra la APP_KEY asi que en la terminal escribimos php artisan key:generate

6 - Se ejecuta php artisan migrate para realizar las migraciones 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
