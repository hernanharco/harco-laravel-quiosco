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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

1. para ejecutar laravel 
    php artisan serve
2. utizamos el siguiente comando en la terminal
    php artisan make:model Categoria --migration --controller
    y crea lo siguiente
         INFO  Model [D:\Clases\PHP\laravel-quiosco\app/Models/Categoria.php] created successfully.  

        INFO  Migration [D:\Clases\PHP\laravel-quiosco\database\migrations/2023_06_19_050510_create_categorias_table.php] created successfully.  

        INFO  Controller [D:\Clases\PHP\laravel-quiosco\app/Http/Controllers/CategoriaController.php] created successfully.
3.  Ahora vamos a migrations y trabajamos en categoria y agregamos parametros al Schema
    php artisan migrate
***4. Añadiendo un Seeder *** los seeder es donde se exporta la información que queremos que aparezca en la base de datos
    php artisan make:seeder CategoriaSeeder

    INFO  Seeder [D:\Clases\PHP\laravel-quiosco\database/seeders/CategoriaSeeder.php] created successfully.

    utilizamos un codigo del siguiente link
    https://gist.github.com/codigoconjuan/2286ec5b38301776f6adc105dba0510d
    importamos 
        use Carbon\Carbon;
        use Illuminate\Support\Facades\DB;
    Vamos a DatabaseSeeder.php y agregamos 
        $this->call(CateoriaSeeder::class); -> para poder importar
    
    php artisan db:seed -> para pasar la información que tenemos en CategoriaSeeder a la base de datos

5. Consultando la B.D 
    Vamos a trabajar en 
    ejemplo -> vamos a web.php en routes -> si no vamos a utilizar API o monoliticas pero se recomienda utilizar el archivo de api.php
    1. Abrimos api.php ubicado en routes
        para poderlo visualizar en el navegador debemos colocarle el /api/categorias
        Route::get('/categorias', [CategoriaController::class, 'index']);
        si utilizamos apiResource la linea de codigo anterior quedaria asi:
        Route::apiResource('/categorias', CategoriaController::class);
    1. Categoria.php ubicado en App\Models
    2. CategoriaController ubicado en App\Http\Controllers

    *** Agregar extensión JSON viewer a chrome ***

6. Incorporando Resource ***
    - php artisan make:resource CategoriaCollection
    - php artisan make:resource CategoriaResource

    crea una carpeta de Resources a nivel de app
    1. Volvemos a CategoriaController.php
     y comentamos la linea que teniamos que esta bien y colocamos la nueva
    - CategoriaCollection -> este archivo usualmente no se va a modificar
    -- Trabajamos en CategoriaResource -> Aqui es donde se va a mostara  que columnas van a retornar y que llaves se van a tener 
        buscar en notas laravel -> como trabajar en CategoriaResource.php algunos ejemplos

7. Debemos ir al Frontend en React y vamos a QuioscoProvider.jsx ubicado en context
    - instalamos npm i axios
    - importamos axios
    - Creamos la funcion obtenerCategorias y creamos un useEffect para que cargue las categorias

    *** si queremos ver donde viene la información vamos a chrome a red - Fetch/XHR  

8. Vamos a react-quiosco
    - Creamos la variables de entorno
        .env.local
    - Modificamos la funcion de obtenerCategorias en QuioscoProvider.jsx

9. Creamos un archivo de config en react-quiosco
    - archivo config a nivel de src
        - Creamos un archivo axios.js
        - Volvemos a QuioscoProvider y modificamos import clienteAxios

*** LARAVEL ***
10. Creando un endpoint vamos a cmd de laravel ***
    php artisan make:model Producto --resource --api --migration
        INFO  Model [D:\Clases\PHP\laravel-quiosco\app/Models/Producto.php] created successfully.

        INFO  Migration [D:\Clases\PHP\laravel-quiosco\database\migrations/2023_06_22_204249_create_productos_table.php] created successfully.  

        INFO  Controller [D:\Clases\PHP\laravel-quiosco\app/Http/Controllers/ProductoController.php] created successfully.

        en controllers esta la parte de como acceder a la base de datos

        - vamos a database - migrations _create_productos y agregamos nombre, precio, imagen, disponible, con:
            foreingnId se relaciona con la tabla de categoria
        ejecutamos la migración como hubo cambios se debe colocar
         terminal-> php artisan migrate

11. Agregamos el seeder - vamos a generar esta clase 
    php artisan make:seeder ProductoSeeder
        database-seeder y es donde 
            https://gist.github.com/codigoconjuan/a4f356244c9a57e876cb0de00558b671
        -vamos a DatabaseSeeder.php y colocamos la linea
            $this->call(ProductoSeeder::class);
        - php artisan db:seed
        - y como repite la información debemos de darle
            php artisan migrate:refresh --seed
12. vamos a routes api.php
    - vamos a productoCOntroller
        - se crean una colección y resource - los archivos quedan en app/http/Resources
            - php artisan make:resource ProductoCollection - normalmente no se hace nada
            - php artisan make:resource ProductoResource - decimos los campos a retornar

            ***formas de consultas***
            return new ProductoCollection(Producto::where('disponible', 1)->orderBy('id', 'DESC')->paginate(10));
            se pagina y se busca solo aquellos datos que tenga disponible en 1


***REACT***
13. instalando useSWR - Esto ayuda para que sea mas rapida y hace como si fuera en tiempo real
    npm i swr

    - Vamos a Inicio.jsx en Views

*** Autenticación, Registro y Cerrar - Sesión de Usuarios ***
Sirve para conectar cualquier tipo de formulario y conectarse con el backend
    ***PHP**
1. Creando un controller
    - php artisan make:controller AuthController -> app/Http/Controllers
    - Request -> Hacen validación mas avanzadas
        php artisan make:request RegistroRequest -> app/Httop/Requests
        Tiene dos metodos authorize()
            se cambia a true
        en rules -> son las reglas de validación
            en AuthController debemos de cambiar Request por RegistroRequest y asi unimos la dos lineas
    - Vamos a api.php -> routes/api.php

    ***REACT***
1. Vamos a registro.jsx
    importamos import { createRef, useState } from "react"

    para ver la información que estamos enviando se ve en response-data
2. Mostrando los errores a la hora de enviar datos a guardar trabajamos en Registro.jsx
    - Creamos un state errores
    - Creamos el Componente Alerta.jsx

3. Retornar mensajes de Ingles a Español *** esta bueno ***
    - vamos a RegistroRequest.php -> app-Http-Requests
        Creamos el metodo de messages()

status of 422 (Unprocessable Content) -> en la consola de chrome esta apareciendo este error no debemos preocuparnos mucho por este mensaje lo que quiere decir esto pasa porque el formulario no ha sido llenado en su totalidad al tener todos los datos este error desaparece

4. habilitando CORS -> Es darle seguridad es para darle peticiones de ciertos dominios y debe tener permisos esto es para que otras personas no consuman nuestros datos
    - axios.js y agregamos el headers:
        tambien agregamos withCredentials: true
    - laravel - cors.php lo encontramos en config
        para acceder 'supports_credentials' => false, -> lo cambiamos por true
    - AuthController.php 
        escribimos //Crear el Usuario y // Retornar una respuesta

contraseña -> @gSsVm2EhahWkeF
extensiones laravel.
Requieres las extensiones

Laravel Intellisense, Laravel Extra Intellisense y Laravel Snippets

Y si bien esas son las de Laravel, hay que recordar que este es un framework php por lo que también complementarlo con: PHP Intelephense, PHP IntelliSense y PHP Namespace Resolver.

También debes asegurarte de llamar las clases con el autocompletado, si tu escribes Request no te importara la clase, sin embargo si lo haces desde las sugerencias de VSCode si importara la clase.

5. Autenticación de Usuario
    - Registro.jsx -> vamos a ver el token y para esto usamos console.log(data.token)
    terminal -> npm artisan route:list ->nos muestra todas las rutas que tiene nuestra aplicación
    - Vamos a utilizar postman copiamos la url
        http://127.0.0.1:8000/api/user -> pero no se puede ingresar porque esta protegida
        - vamos a header y colocamos los datos que estan en axios.js
            Key-> Accept
            VALUE -> application/json
            Key-> X-Requested-With
            VALUE -> XMLHttpRequest
            - nos dice que no esta autenticado
            como para autenticar
            vamos authorization
            - tenemos que revisar que en la parte de type este la opcion de bearer token
             - en token - colocamos el token de laravel
6. Lo primero que se debe hacer a la hora de autenticacion
    - trabajamos a Login.jsx
    - trabajamos en api.php y digitamos la linea
        Route::post('/registro', [AuthController::class, 'login']);
    6.1 Validando la autenticación
        terminal -> php artisan make:request LoginRequest
        - importamos LoginRequest en AuthController.php
            public function login(LoginRequest $request)
        - Vamos a LoginRequest.php
            authorize() return lo ponemos en true
            y trabajamos en rules()
        - volvemos a AuthController.php y trabajamos el metodo login
            $data = $request->validated();
        - Login.jsx -> y agregamos el locarStorage

    6.2 Creando un Hook para Centralizar la Autenticación
        - Creamos un hooks -> useAuth.js
        - Vamos a Login.jsx y movemos el try catch a  useAuth.js
    
    6.3 Como proteger una ruta para que no pueda ingresar todo el mundo
        - Layout.jsx 
            import { useAuth }
    
    6.4 Cerrar la Sesión del Usuario
        - Sidebar.jsx
        - Manejamos el metodo de logout en useAuth.js que este va enlazado con AuthController.php con la funcion logout
        -modificamos el api.php

7. Registro y Autenticar Usuarios
    - Registro.jsx - import { useAuth } from "../hooks/useAuth";
    - useAuth.js  - metodo registro
    - Colocando el nombre en Sidebar.jsx

8. Creando Modelo, Migración y Controller para Pedidos
    8.1 php artisan make:model Pedido --migration --api --resource
    - 2023_07_01_204104_create_pedidos_table.php -> vamos almacenar que usuario lo esta pidiendo
        php artisan migrate
    - PedidoController.php
    - api.php

9. *** Comunicar froend con backend ***
    - Vamos a PedidoController.php a la función store
    - y en Resumen.jsx creamos la funcion handleSubmit
        OnSubmit={handleSubmit}
    - QuioscoProvider.jsx y creamos la función handleSubmitNuevaOrden

    9.1 Almacenando el usuario y total
        - PedidoController.php en la funcion store en el video 332 muestra como pasar la información por medio del post
    9.2 Creando una tabla pivote una relacion de muchos para almacenar los productos que se pidieron
        - php artisan make:model PedidoProducto --migration
        - vamos a 2023_07_05_041216_create_pedido_productos_table.php
            hacemos las relaciones correspondientes
        - php artisan migrate
    9.3 Como hacer para identificar el id al cual pertenece el producto
        en PedidoController.php
            // Obtener el ID del pedido
            vamos a traer la información de productos y para esto utilizamos la información de handleSubmitNuevaOrden ubicado  en QuioscoProvider.jsx
            le colocamos map para solo traer la información necesaria y no todo
            // Obtener los productos
            // Formatear un arreglo
            // Almacenar en la BD
    9.4 Finalización de la Orden Pedido
        - PedidoController.php
        - QuioscoProvider 
            en la función handleSubmitNuevaOrden
                tomamos lo que retorna axios con el {data}
        - Para Cerra la sesión de un Cliente
            Vamos a Resumen.jsx
             e import useaAuth
        - Despues de pasar logout 
            vamos a QuioscoProvider a la función de handleSubmitNuevaOrden 

10. *** Creando panel de Administración Para las personas de Cocina puedan ver los Productos ***
    1. router.jsx - agregas el path de /admin - Vista (Creamos el AdminLayout.jsx - Creamos Ordenes.jsx - Creamos Productos.jsx) - Creamos un componente AdminSidebar.jsx
    2. Trabajando en el Sidebar
        - AdminSidebar.jsx
    3. Creamos una migración 
        - php artisan make:migration add_admin_column_to_users_table
        - 2023_07_06_041118_add_admin_column_to_users_table.php
            trabajamos en la función de up
        - php artisan migrate
        - abrimos la base de datos y podemos observar que ya agrego el camo admin
    4. Detectar si un Usuario es Administrador
        - Si queremos verificar los datos que tiene el usuario podemos ir a useAuth.js
            colocamos console.log(user); -> esto solo para verificar que traiga la información
        - agregamos en useEffect el middleware === 'guest'
        - Vamos AdminLayout.jsx -> y colocamos useAuth para que verifique la información de useAuth.js
        - El profesor hablo de Cypress *** Investigar ***
        - Ordenes.jsx - Productos.jsx
    5. Ordenes.jsx
        - importamos useSWR y clienteAxiso
        - Tener presente que  api.php tenemos los enlaces dentro deauth:sanctum entonces el usuario se debe autenticar para poder ver la información
        - PedidoController.php en la función index() es lo primero que se habilita cuando se hace el llamado este sería el inicio del get
    6. Colección para retornar la coleccion
        - php artisan make:resource PedidoCollection
        - Vamos a PedidoController.php al metodo index()
            vamos a Ordenes.jsx y miramos si todo queda bien en data?.data
            vamos a Pedido.php y creamos la el metodo user()
            modificamos en PedidoController.php y colocamos with()
    7. Añadir los Productos segun la Orden
        - vamos  Pedido.php y creamos al function productos() una relación de muchos a muchos se utiliza belongsToMany
        - Vamos  a PedidoController.php y colocamos with('productos') en es el nombre de la funcion que se creo en el anterior punto
    8. Mostra la información ya en pantalla
        - Ordenes.jsx
        - Como no esta trayendo el campo cantidad vamos a Pedido.php a la funcion de productos y agregamos ->withPivot('cantidad')
    9. Completando las Ordenes
        - QuioscoProvider.jsx creamos la funcion handleClickCompletarPedido
        - importarla en Ordenes.jsx 
        - vamos a PedidoController.php en la funcion de update y colamos return $pedido y esta información la imprime en la red
    10. Productos.jsx
    11. Producto.jsx es para mostrar que un producto esta agotado






*** UTILIZACIÓN DE CORS - Seguridad y poder dar acceso a los datos***
Hola Angel, En Laravel, puedes habilitar CORS (Cross-Origin Resource Sharing) para permitir que tu backend acepte peticiones desde una URL específica, como tu aplicación de React. Para lograr esto, Laravel proporciona un middleware llamado cors que puedes utilizar.

Para habilitar CORS en Laravel y permitir solo las peticiones desde la URL de tu aplicación de React, puedes seguir estos pasos:

Instala el paquete fruitcake/laravel-cors utilizando Composer:

composer require fruitcake/laravel-cors
Una vez instalado el paquete, Laravel automáticamente registrará el middleware Cors en tu aplicación.

Puedes configurar las opciones del middleware Cors en el archivo config/cors.php. En este archivo, encontrarás opciones como allowed_origins, allowed_methods, etc. Puedes personalizar estas opciones según tus necesidades.

Por ejemplo, para permitir solo las peticiones desde la URL de tu aplicación de React, puedes establecer la opción allowed_origins de la siguiente manera:

'allowed_origins' => [
    'http://tu-app-react.com',
],
Asegúrate de reemplazar http://tu-app-react.com con la URL real de tu aplicación de React.

Aplica el middleware Cors a las rutas o grupos de rutas que deseas proteger. Puedes hacerlo agregando el middleware en el archivo de rutas (routes/web.php o routes/api.php) o en un controlador específico.

Por ejemplo, para aplicar el middleware a todas las rutas en un archivo de rutas, puedes hacer lo siguiente:

use Illuminate\Support\Facades\Route;
 
Route::middleware('cors')->group(function () {
    // Aquí van tus rutas protegidas por CORS
});
Asegúrate de ajustar las rutas y el grupo de rutas según tus necesidades.

Con estos pasos, Laravel estará configurado para permitir solo las peticiones desde la URL específica de tu aplicación de React y bloquear cualquier otro intento de acceso a los datos.

Espero que esto aclare tus dudas y te ayude a habilitar CORS en tu proyecto Laravel para trabajar con tu aplicación de React de manera segura.

*** error consola ***
Registro.jsx?t=1687839475655:38     POST http://127.0.0.1:8000/api/registro 500 (Internal Server Error)



