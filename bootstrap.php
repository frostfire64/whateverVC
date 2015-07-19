<?php
// a bootstrap file that loads all the important configuration
// and initalises the autoloader. It calls the routing controller too!!

//let's find the project direcory shall we?
define('PROJECT_DIR',__DIR__);

require_once ('config/config.php');

//here we define one pdo instance used throughtout the whole project
$db = new PDO('mysql:host='.MYSQL_HOSTNAME.';dbname='.MYSQL_DBNAME,
              MYSQL_USERNAME,
              MYSQL_PASSWORD
              );

// very sophicicated Autoloader
spl_autoload_register(function ($class) {
  
    $classdirs = ['/framework/',
                  '/lib/',
                  '/models/',
                  '/controllers/'];
    
    foreach ($classdirs as $classdir) {
        $file = __DIR__ . $classdir . $class . '.php';
        
        if (file_exists($file)) {
            require $file;
            return true;
        }
    }
});

$route = $_GET['r'];

// basic router implementation
// it works like this: /ClassController/method/argument1/argument2

if (empty($route)){
    $route = DEFAULT_ROUTE;
}

Router::route($route);
