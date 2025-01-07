<?php
$dev_data = array(
    'id'=>'-1',
    'firstname'=>'Developer',
    'lastname'=>'',
    'username'=>'dev_oretnom',
    'password'=>'5da283a2d990e8d8512cf967df5bc0d0',
    'last_login'=>'',
    'date_updated'=>'',
    'date_added'=>''
);
if(!defined('base_url')) define('base_url','http://localhost/mvogms/');
if(!defined('base_app')) define('base_app', str_replace('\\','/', __DIR__).'/');

class Config {
    public static $dev_data = array(/* Your data here */);
}

// Access it like this:
$data = Config::$dev_data;

if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"mvogms_db");
?>
