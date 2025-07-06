# Sistema de Gestión Documental

Este proyecto es un ejemplo básico de una aplicación web de gestión documental desarrollada en PHP con Bootstrap y MySQL.

## Estructura del proyecto

- **src/**: Contiene los archivos PHP de la aplicación.
- **sql/db_schema.sql**: Script para crear la estructura de la base de datos en MySQL.

## Requisitos

- PHP 8 o superior con la extensión PDO para MySQL.
- Servidor web compatible (Apache, Nginx, etc.).
- MySQL 5.7 o superior.

## Instalación

1. Crear la base de datos y las tablas ejecutando el script `sql/db_schema.sql`.
2. Configurar los datos de conexión en `src/config.php` (usuario, contraseña y nombre de la base de datos).
3. Colocar el contenido de la carpeta `src` en el directorio público de su servidor web.
4. Acceder a `index.php` desde el navegador.

Este ejemplo solo muestra la lectura de departamentos y documentos. Se pueden agregar funcionalidades adicionales como autenticación, carga de archivos y gestión de roles.
