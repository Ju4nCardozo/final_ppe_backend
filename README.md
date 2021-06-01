Integrantes: Juan Camilo Naranjo Piedrahita

             Juan Esteban Cardozo Galeano
             
Guía Instalación del proyecto:

*Instalar dependencias
*Crear una base de datos
*Crear el archivo .env
*Generar una clave
*Migrar y sembrar la base de datos


*Instalar dependencias*
Instalaremos con Composer, el manejador de dependencias para PHP, las dependencias definidos en el archivo composer.json. Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos:

composer install
Vemos cómo se ha creado la carpeta vendor.

También debemos instalar las dependencias de NPM definidas en el archivo package.json con:

npm install
Y en esta ocasión vemos cómo se crea la carpeta node_modules.

*Crear una base de datos*

Crear una base de datos MySQL vacia con el nombre de finalppebackend

*Crear el archivo .env*
Este archivo es necesario para, entre otras cosas, configurar la conexión de la bbdd, el entorno del proyecto, motores para envio y recepción de correos etc …

Como por cuestiones de seguridad tampoco se subió, necesitamos crearlo.

Podemos duplicar el archivo .env.example, renombrarlo a .env e incluir los datos de conexión de la base de datos que indicamos en el paso anterior.

..... 
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=finalppebackend
DB_USERNAME=root
DB_PASSWORD=UnaClave
....


*Generar una clave*
La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env. Notarás que también falta.

Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:

php artisan key:generate


*Ejecutar migraciones*
Por último, ejecutamos las migraciones para que se generen las tablas con:

php artisan migrate 
Si tuvieramos que incluir o crear nuevas migraciones utilizaríamos:

php artisan migrate:refresh 
php artisan migrate:fresh  //borra y crea todas las tablas de nuevo

Con esto ya tendría que correr sin problemas la aplicación de Laravel que hemos clonado.

Se accede mediante la url: finalppebackend.test
