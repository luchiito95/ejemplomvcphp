<?php

require_once  $_SERVER["DOCUMENT_ROOT"].'/ejemplomvcphp/libs/php-activerecord/ActiveRecord.php';

 ActiveRecord\Config::initialize(function($cfg)
 {
 $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"].'/ejemplomvcphp/models');
 $cfg->set_connections(array(
 'development' => 'mysql://root:@localhost/ejemplomvcphp'));
 });
