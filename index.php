<?php

define('MAD_INSTALL_PATH', dirname(__FILE__));
define('MAD_SITE_PATH', MAD_INSTALL_PATH . '/site');

require(MAD_INSTALL_PATH.'/src/bootstrap.php');

$ml = CMad::Instance();

$ml->FrontControllerRoute();

$ml->ThemeEngineRender();