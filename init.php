<?php

if( !defined(SERVER_ROOT) ) { define('SERVER_ROOT', dirname($_SERVER['DOCUMENT_ROOT'])); }
if( !defined(VENDOR_PATH) ){ define('VENDOR_PATH', SERVER_ROOT.'/vendor'); }
if( !defined(APP_PATH) ) { define('APP_PATH', SERVER_ROOT.'/app'); }
if( !defined(TEST_PATH) ){ define('TEST_PATH', APP_PATH.'/tests'); }

require_once VENDOR_PATH . '/autoload.php';
