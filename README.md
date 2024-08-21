# PHP Trabajo Práctico Nº 1

¡Bienvenido a **PHP Trabajo Práctico Nº 1**! Este proyecto es una aplicación web desarrollada en PHP. Para ejecutarla en tu entorno local, necesitarás [Composer](https://getcomposer.org/) y XAMPP.

## Requisitos

- **PHP** (v7.4 o superior recomendado)
- **Composer** (para manejar las dependencias de PHP)
- **XAMPP** (para el servidor web)

## Instalación

Sigue estos pasos para configurar y ejecutar la aplicación en tu entorno local:

### 1. Inicia XAMPP

### 2. Dirígete a la carpeta htdocs de XAMPP

Por ejemplo, en windows C:\xampp\htdocs

### 3. Clonar el Repositorio en la carpeta htdocs

```bash
git clone git@github.com:juanlausi89/PWDinamicaTpUno.git 

```

### 4. Instalar Dependencias

```bash
cd PWDinamicaTpUno

```

```bash
composer install

```

### 5. Ve a tu navegador de preferencia e ingresa a la siguiente url

localhost:80/PWDinamicaTpUno

### 6. Verificar el puerto para constante de importacion de archivos css y javascript

Verificar en el archivo src/config/config.php la linea define('URL', 'http://localhost:80/PWDinamicaTpUno/')
Esta constante URL se utiliza en las vistas de php para importar archivos css y javascipt. Si no coincide
cambiarla.