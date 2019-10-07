<?php

define('DSN', 'mysql:dbname=nu2019;host=localhost;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
// define('DB_PASSWORD', 'c56O9NS2rR8t');
define('SITE_URL', 'http://localhost/nu2019/');
// define('SITE_URL', 'http://3.112.191.94/Team3/');

error_reporting(E_ALL & ~E_NOTICE);     // E_NOTICE以外のエラーをすべて出力する
// 開発時はerror_reporting(E_ALL & ~E_NOTICE)としてE_NOTICE以外のエラーをすべて出力し、
// 公開時はerror_reporting(0)としてエラーを出力しないようにする

session_set_cookie_params(1440, '/');   // セッションの設定をする
// 第一引数がセッションの有効期限
// 第二引数が有効範囲('/'と記述すれば全範囲でセッションが有効になる)
