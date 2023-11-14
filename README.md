# innclod-test
Prueba técnica Innclod Colombia (PHP, JS, MySQL).

***REQUSITOS TÉCNICOS***
* Node 18.18.0
* npm  
* Wampserver 3.3.0
* Composer 2.6.5
* php 8.2.0

***INSTRUCCIONES DE DESPLIEGUE***

1.  Descargar e importar archivo de base de datos innclod.sql en phpMyAdmin para tener la base de datos actualizada.
2.  Clone el repositorio y abra la carpeta del proyecto en VSC.
3.  Cree un archivo .env, copie y pegue todas las variables de entorno contenidas en el archivo .env.example.
    luego cambie las siguientes variables para conectar la base de datos:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=innclod
    DB_USERNAME=root
    DB_PASSWORD=
3.  Abra una terminal y ejecute los siguientes comandos:
    * npm install
    * npm run dev
    * composer require laravel/jetstream
    * php artisan serve 



***INSTRUCCIONES DE USO***

* Registro y Login:

Dentro de la aplicación tiene la ventana de login donde puede ingresar con las siguientes credenciales:

Email: itrejo@mail.com
Password: admin123

O si prefiere, diríjase al link Registro, disponible en la esquina superior izquierda de la pantalla. Allí podrá crear sus credenciales con un email y contraseña.

* Registro de Documentos:

En la vista principal se presentan todos los documentos almacenados en la Base de datos, allí tiene disponible las opciones para editar y borrar un documento.

En la parte superior, tiene una barra de búsqueda donde puede buscar un documento a partír del Cod. Documento de este.

* Crear un documento:

Complete el formulario con la información solicitada, recuerde que todos los campos son requeridos. Una vez completedado el formulario haga click en enviar



* Logout:

Pulse el botón Cerrar Sesión disponible en la barra de navegación.

