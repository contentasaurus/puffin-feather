<?php

define('SERVER_ROOT', dirname($_SERVER['DOCUMENT_ROOT']));
define('VENDOR_PATH', SERVER_ROOT.'/vendor');
define('APP_PATH', SERVER_ROOT.'/app');
define('TEST_PATH', APP_PATH.'/tests');

require VENDOR_PATH . '/autoload.php';
