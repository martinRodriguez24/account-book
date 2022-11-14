# account-book
Sistema para guardar datos de cuentas de forma segura, hecho con PHP y MySQL
***
## Tabla de contenidos
- [account-book](#account-book)
  - [Tabla de contenidos](#tabla-de-contenidos)
    - [Info general](#info-general)
    - [Tecnologias](#tecnologias)
    - [Como usar](#como-usar)
***
### Info general
Sistema para guardar informacion sobre cuentas, con inicio de sesion, sección con formulario para subir cuentas, y seccion para ver el listado y poder modificar o borrar elementos
***
### Tecnologias
Creado con PHP, MySQL usando PDO. Para el frontend se usó css, js y fontawesome para los iconos.
***
### Como usar
Descargar y mover el proyecto a htdocs. En la carpeta config podremos editar la conexion a la base de datos. En el archivo 'account_book.sql' tendremos una tabla llamada 'user', donde se guarda el correo y contraseña del usuario para ingresar al sistema(por defecto: 'user@gmail.com' y 'admin123'), y otra llamada 'account'. Importamos el archivo .sql a MySQL y podremos ingresar, En el inicio tendremos las opciones para ingresar datos de una cuenta, ver los datos, o cerrar sesion.
