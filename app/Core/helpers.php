<?php
function loadEnv(string $file):void{if(!is_file($file))return;foreach(file($file,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) as $line){if(str_starts_with(trim($line),'#')||!str_contains($line,'='))continue;[$k,$v]=array_map('trim',explode('=',$line,2));$_ENV[$k]=trim($v,"\"'");}}
function env(string $key,mixed $default=null):mixed{return $_ENV[$key]??getenv($key)?:$default;}
function config(string $name):array{static $c=[];return $c[$name]??=$c[$name]=require dirname(__DIR__,2)."/config/$name.php";}
function e(?string $v):string{return htmlspecialchars($v??'',ENT_QUOTES,'UTF-8');}
function url(string $path=''):string{return config('app')['url'].'/'.ltrim($path,'/');}
function asset(string $path):string{return url('assets/'.ltrim($path,'/'));}
function redirect(string $path):never{header('Location: '.url($path));exit;}
function old(string $key,string $default=''):string{return e($_SESSION['_old'][$key]??$default);}
function flash(string $key,?string $value=null):?string{if($value!==null){$_SESSION['_flash'][$key]=$value;return null;}$v=$_SESSION['_flash'][$key]??null;unset($_SESSION['_flash'][$key]);return $v;}
function csrf_field():string{return '<input type="hidden" name="_token" value="'.e(App\Core\Csrf::token()).'">';}
function auth():?array{return $_SESSION['user']??null;}
