<?php
declare(strict_types=1);
session_start();
require dirname(__DIR__).'/app/Core/helpers.php';
spl_autoload_register(function(string $class){$prefix='App\\';if(str_starts_with($class,$prefix)){require dirname(__DIR__).'/app/'.str_replace('\\','/',substr($class,strlen($prefix))).'.php';}});
loadEnv(dirname(__DIR__).'/.env');
use App\Core\Router;
use App\Controllers\{HomeController,AuthController,CarController,DashboardController};
$router=new Router();
$router->get('/',[HomeController::class,'index']);
$router->get('/login',[AuthController::class,'showLogin']); $router->post('/login',[AuthController::class,'login']);
$router->get('/register',[AuthController::class,'showRegister']); $router->post('/register',[AuthController::class,'register']);
$router->post('/logout',[AuthController::class,'logout']);
$router->get('/mobil',[CarController::class,'index']); $router->get('/mobil/tambah',[CarController::class,'create']); $router->post('/mobil/tambah',[CarController::class,'store']);
$router->get('/mobil/{id}',[CarController::class,'show']); $router->get('/mobil/{id}/edit',[CarController::class,'edit']); $router->post('/mobil/{id}/edit',[CarController::class,'update']);
$router->post('/mobil/{id}/hapus',[CarController::class,'destroy']); $router->post('/mobil/{id}/favorit',[CarController::class,'favorite']);
$router->get('/dashboard',[DashboardController::class,'index']);
$router->dispatch($_SERVER['REQUEST_METHOD'],parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
