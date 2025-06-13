<?php

define('APP_DIR', __DIR__);
define('CONTROLLER_DIR', APP_DIR . 'app/controllers');

require_once APP_DIR . '/app/system/Request.php';
require_once APP_DIR . '/app/system/Enums/HttpMethod.php';
require_once APP_DIR . '/app/system/Router/Router.php';
require_once APP_DIR . '/app/system/Router/routes.php';


Router::process(HttpMethod::from(Request::method()), Request::url());



