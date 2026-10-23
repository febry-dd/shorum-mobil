<?php namespace App\Core;
final class Csrf{public static function token():string{return $_SESSION['_token']??=$_SESSION['_token']=bin2hex(random_bytes(32));}public static function verify(?string $token):void{if(!$token||!hash_equals(self::token(),$token)){http_response_code(419);exit('Sesi formulir tidak valid. Muat ulang halaman.');}}}
