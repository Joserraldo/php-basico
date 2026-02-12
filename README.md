# PHP Básico con Laravel

## José Alejandro Téllez Prada

<img src="https://avatars.githubusercontent.com/u/166764435?v=4" width="100" alt="Avatar de José Alejandro Téllez Prada">

---

## Descripción

Este proyecto es una aplicación básica desarrollada en **Laravel** para aprender los fundamentos de **PHP** y el framework **Laravel**. Incluye rutas simples, vistas básicas y la estructura estándar de una aplicación Laravel.

This project is a basic application developed in **Laravel** to learn the fundamentals of **PHP** and the **Laravel** framework. It includes simple routes, basic views, and the standard structure of a Laravel application.

---

## Requisitos Previos / Prerequisites

- **PHP** >= 8.2
- **Composer** (para gestión de dependencias de PHP)
- **Node.js** y **npm** (para assets frontend)
- **Laravel** (instalado globalmente o vía Composer)

- **PHP** >= 8.2
- **Composer** (for PHP dependency management)
- **Node.js** and **npm** (for frontend assets)
- **Laravel** (installed globally or via Composer)

---

## Instalación / Installation

1. **Clona el repositorio / Clone the repository:**
   ```bash
   git clone <url-del-repositorio>
   cd php-basico
   ```

2. **Instala las dependencias de PHP / Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Instala las dependencias de Node.js / Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Configura el entorno / Configure the environment:**
   - Copia el archivo `.env.example` a `.env` / Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Genera la clave de aplicación / Generate the application key:
     ```bash
     php artisan key:generate
     ```

5. **Configura la base de datos (opcional) / Configure the database (optional):**
   - Edita el archivo `.env` con tus credenciales de base de datos / Edit the `.env` file with your database credentials.
   - Ejecuta las migraciones / Run the migrations:
     ```bash
     php artisan migrate
     ```

6. **Compila los assets / Compile the assets:**
   ```bash
   npm run build
   ```

7. **Inicia el servidor / Start the server:**
   ```bash
   php artisan serve
   ```

   La aplicación estará disponible en `http://localhost:8000` / The application will be available at `http://localhost:8000`.

---

## Uso / Usage

Una vez instalado, puedes acceder a las siguientes rutas / Once installed, you can access the following routes:

- **`/`** - Página de bienvenida de Laravel / Laravel welcome page
- **`/mi-nombre`** - Muestra "Jose" / Displays "Jose"
- **`/php-basico`** - Muestra "jose" / Displays "jose"

Puedes modificar las rutas en `routes/web.php` y las vistas en `resources/views/` / You can modify the routes in `routes/web.php` and the views in `resources/views/`.

---

## Estructura del Proyecto / Project Structure

```
php-basico/
├── app/                    # Código de la aplicación / Application code
│   ├── Http/
│   │   ├── Controllers/    # Controladores / Controllers
│   │   └── Middleware/     # Middleware
│   └── Models/             # Modelos / Models
├── bootstrap/              # Archivos de arranque / Bootstrap files
├── config/                 # Archivos de configuración / Configuration files
├── database/               # Migraciones y seeders / Migrations and seeders
├── public/                 # Archivos públicos / Public files
├── resources/              # Vistas y assets / Views and assets
│   ├── css/
│   ├── js/
│   └── views/
├── routes/                 # Definición de rutas / Route definitions
│   └── web.php
├── storage/                # Archivos de almacenamiento / Storage files
├── tests/                  # Pruebas / Tests
├── vendor/                 # Dependencias de Composer / Composer dependencies
├── .env.example            # Ejemplo de configuración / Configuration example
├── artisan                 # Comando de Laravel / Laravel command
├── composer.json           # Dependencias de PHP / PHP dependencies
├── package.json            # Dependencias de Node.js / Node.js dependencies
└── README.md               # Este archivo / This file
```

---

## Tecnologías Utilizadas / Technologies Used

- **Laravel** - Framework PHP
- **PHP** - Lenguaje de programación
- **Tailwind CSS** - Framework CSS
- **Vite** - Herramienta de construcción / Build tool
- **Composer** - Gestor de dependencias PHP
- **npm** - Gestor de paquetes Node.js

- **Laravel** - PHP Framework
- **PHP** - Programming language
- **Tailwind CSS** - CSS Framework
- **Vite** - Build tool
- **Composer** - PHP dependency manager
- **npm** - Node.js package manager

---

## Aprendizaje / Learning

Este proyecto cubre conceptos básicos de / This project covers basic concepts of:

- Instalación y configuración de Laravel / Laravel installation and configuration
- Definición de rutas / Route definition
- Creación de vistas con Blade / Creating views with Blade
- Gestión de assets con Vite / Asset management with Vite
- Estructura de directorios de Laravel / Laravel directory structure

---

## Contribución / Contribution

Si deseas contribuir, por favor crea un fork del repositorio y envía un pull request / If you want to contribute, please fork the repository and submit a pull request.

---

## Licencia / License

Este proyecto está bajo la Licencia MIT / This project is under the MIT License.

---

## Contacto / Contact

José Alejandro Téllez Prada  
[GitHub](https://github.com/jose-alejandro-tellez-prada)  
[LinkedIn](https://linkedin.com/in/jose-alejandro-tellez-prada) (si aplica / if applicable)
