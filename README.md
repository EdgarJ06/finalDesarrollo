<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Proyecto de Blog en Laravel 11 con AdminLTE

Este proyecto es una aplicación de gestión de blog que permite a los usuarios realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en entradas de blog. La interfaz de administración está construida con **AdminLTE** para proporcionar una experiencia de usuario amigable.

## Tabla de Contenidos
- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Migraciones y Seeder](#migraciones-y-seeder)
- [Ejecución del Servidor](#ejecución-del-servidor)
- [Uso](#uso)

## Características
1. **CRUD completo para entradas de blog**:
    - Crear, leer, actualizar y eliminar entradas.
2. **Visualización de entradas**:
    - Paginación de todas las entradas.
3. **Categorías y etiquetas**:
    - Administración de categorías y etiquetas para cada entrada.
4. **Interfaz de usuario**:
    - Interfaz amigable para el administrador, desarrollada con **AdminLTE**.
5. **Subida de Imágenes**:
    - Soporte para subir y visualizar imágenes en las entradas.

## Requisitos
- **PHP >= 8.1**
- **Composer** para la gestión de dependencias.
- **Laravel 11**.
- **Extensión php_fileinfo** habilitada.
- **Base de datos** compatible con Laravel (MySQL, PostgreSQL, etc.).
- **Node.js y npm** (opcional, para compilar assets).


## Instalación

Para instalar y configurar el proyecto, sigue los siguientes pasos:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/EdgarJ06/proyectoDesarrolloWeb

2. **Navega al directorio del proyecto:**
   ```bash
   cd proyectoDesarrolloWeb

3. **Instala las dependencias del proyecto:**
   ```bash
   composer install
   
4. **Copia el archivo de entorno de ejemplo y renómbralo:**
   ```bash
   cp .env.example .env

5. Configura tu archivo .env con las credenciales de tu base de datos y otras configuraciones necesarias.

6. **Genera la clave de la aplicación:**
   ```bash
   php artisan key:generate

7. **Ejecuta las migraciones y seeders para crear las tablas en la base de datos y sus registros:**
   ```bash
   php artisan migrate --seed

8. **Inicia el servidor:**
   ```bash
   php artisan serve

## Uso

Accede al proyecto en tu navegador en la siguiente dirección: http://localhost:8000
