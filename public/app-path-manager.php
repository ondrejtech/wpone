<?php

$APP_LOCAL_HOSTNAME = array(
"127.0.0.1",
"::1"
);

$APP_ENVIRONMENT_PATH = array(

	"development" => array(
		"hostname" => "http://localhost/wpone/",
		"storage" => "http://localhost/wpone/upload/"
	),

	"production" => array(
		"hostname" => "https://www.wpone.cz/",
		"storage" => ""
	)

);

if (!in_array($_SERVER["REMOTE_ADDR"], $APP_LOCAL_HOSTNAME)) {

	define("APP_PATH", "../app/");
	define("APP_RES_PATH", $APP_ENVIRONMENT_PATH["production"]["hostname"]);
	define("APP_INCLUDE_PATH", "");
	define("APP_STORAGE_PATH", $APP_ENVIRONMENT_PATH["production"]["storage"]);

} else {

	define("APP_PATH", "../app/");
	define("APP_RES_PATH", $APP_ENVIRONMENT_PATH["development"]["hostname"]);
	define("APP_INCLUDE_PATH", "");
	define("APP_STORAGE_PATH", $APP_ENVIRONMENT_PATH["development"]["storage"]);
}




?>