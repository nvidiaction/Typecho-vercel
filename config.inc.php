<?php
define('__TYPECHO_SECURE__',true);
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');
define('__TYPECHO_THEME_DIR__', '/usr/themes');
define('__TYPECHO_ADMIN_DIR__', '/admin/');
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);
require_once 'Typecho/Common.php';
Typecho_Common::init();
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'sql.freedb.tech',
  'port' => 3306,
  'user' => 'freedb_nvidiaction',
  'password' => '4%R!2$vzpJpvBCs',
  'charset' => 'utf8mb4',
  'database' => 'freedb_nvidiaction',
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);