<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">name:<br><!--Server variable at key PHP_SELF which contains current file path where this form is. htmlspecialchars to avoid cross scripting attacks-->
        <input type="text" name="name">
        <input type="submit">
</body>

</html>

<?php
// $_SERVER = SGB (Super Global Variable) That contains headers, paths, and script locations. 
//The entries in this array are created by the web server.
//Associative array
//Show nearly everything you need to know about the current web page env.

//$_SERVER[]

// Key $_SERVER["PHP_SELF"] - Uses current file path as file path.
// key $_SERVER["REQUEST_METHOD"] - On form submit will detect change and contains method value. 
//This way of tracking server requests is better than using isset($_POST["submit]) because there are other ways to click submit without clicking submit.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST request detected";
}

//This holds value of absolute path to script's existing location
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
//Returns C:/xampp/htdocs/website/index.php

//Value is server address in use
echo $_SERVER['SERVER_ADDR'] . "<br>";
//Returns ::1

//Server port number
echo $_SERVER['SERVER_PORT'] . "<br>";
//Returns 80

//Client IP Address
echo $_SERVER['REMOTE_ADDR'] . "<br>";

//Directory that contains where the directory for this file's folder is located
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";



//Show all key value pairs in server
// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }
//Returns
// MIBDIRS = C:/xampp/php/extras/mibs
// MYSQL_HOME = \xampp\mysql\bin
// OPENSSL_CONF = C:/xampp/apache/bin/openssl.cnf
// PHP_PEAR_SYSCONF_DIR = \xampp\php
// PHPRC = \xampp\php
// TMP = \xampp\tmp
// HTTP_HOST = localhost
// HTTP_CONNECTION = keep-alive
// HTTP_UPGRADE_INSECURE_REQUESTS = 1
// HTTP_USER_AGENT = Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36
// HTTP_ACCEPT = text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
// HTTP_SEC_FETCH_SITE = none
// HTTP_SEC_FETCH_MODE = navigate
// HTTP_SEC_FETCH_USER = ?1
// HTTP_SEC_FETCH_DEST = document
// HTTP_SEC_CH_UA = "Not_A Brand";v="8", "Chromium";v="120", "Google Chrome";v="120"
// HTTP_SEC_CH_UA_MOBILE = ?0
// HTTP_SEC_CH_UA_PLATFORM = "Windows"
// HTTP_ACCEPT_ENCODING = gzip, deflate, br
// HTTP_ACCEPT_LANGUAGE = en-US,en;q=0.9
// HTTP_COOKIE = fav_food=pizza; fav_drink=cofee; favoriteColor=pink; favoritePop=strawberry; PHPSESSID=lkqaold28ftook1jd227c5g0dj
// PATH = C:\Program Files\Eclipse Adoptium\jdk-21.0.0.35-hotspot\bin;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;C:\Program Files\Git\cmd;C:\Program Files\nodejs\;C:\sqlite;C:\Users\triss\AppData\Local\Microsoft\WindowsApps;C:\Users\triss\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\triss\AppData\Roaming\npm;C:\Program Files\heroku\bin;C:\Users\triss\AppData\Local\GitHubDesktop\bin;C:\Program Files (x86)\Nmap
// SystemRoot = C:\Windows
// COMSPEC = C:\Windows\system32\cmd.exe
// PATHEXT = .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
// WINDIR = C:\Windows
// SERVER_SIGNATURE =
// Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80

// SERVER_SOFTWARE = Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
// SERVER_NAME = localhost
// SERVER_ADDR = ::1
// SERVER_PORT = 80
// REMOTE_ADDR = ::1
// DOCUMENT_ROOT = C:/xampp/htdocs
// REQUEST_SCHEME = http
// CONTEXT_PREFIX =
// CONTEXT_DOCUMENT_ROOT = C:/xampp/htdocs
// SERVER_ADMIN = postmaster@localhost
// SCRIPT_FILENAME = C:/xampp/htdocs/website/index.php
// REMOTE_PORT = 62952
// GATEWAY_INTERFACE = CGI/1.1
// SERVER_PROTOCOL = HTTP/1.1
// REQUEST_METHOD = GET
// QUERY_STRING =
// REQUEST_URI = /website/
// SCRIPT_NAME = /website/index.php
// PHP_SELF = /website/index.php
// REQUEST_TIME_FLOAT = 1705800822.0225
// REQUEST_TIME = 1705800822