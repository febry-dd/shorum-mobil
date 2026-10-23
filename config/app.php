<?php
return ['name'=>env('APP_NAME','Shorum Mobil'),'url'=>rtrim(env('APP_URL','http://localhost:8080'),'/'),'debug'=>filter_var(env('APP_DEBUG',false),FILTER_VALIDATE_BOOL)];
