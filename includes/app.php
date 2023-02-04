
<?php 

require __DIR__ . '/../vendor/autoload.php';

// require 'C:\xampp\htdocs\appsalon\vendor\autoload.php';
// $dotenv = Dotenv\Dotenv::createInmutable(__DIR__);

// $dotenv = Dotenv\Dotenv::createInmutable(__DIR__);
// $dotenv->safeLoad();

// $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);

// $dotenv -> cargar();

// $envPath = './';
    
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .$envPath);
// $dotenv->load();

require 'funciones.php';
require 'database.php';




// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);