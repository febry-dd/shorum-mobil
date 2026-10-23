<?php namespace App\Core;
use PDO;
final class Database{private static ?PDO $pdo=null;public static function connection():PDO{if(!self::$pdo){$c=config('database');self::$pdo=new PDO("mysql:host={$c['host']};port={$c['port']};dbname={$c['dbname']};charset=utf8mb4",$c['user'],$c['pass'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]);}return self::$pdo;}}
