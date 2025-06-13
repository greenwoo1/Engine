<?php

define('APP_DIR', __DIR__);

require_once APP_DIR . '/app/Enums/HttpMethod.php';
require_once APP_DIR . '/app/Router/Router.php';
require_once APP_DIR . '/app/Router/routes.php';


function calculateSquares(int $limit): array {
    $result = [];
    for ($i = 1; $i <= $limit; $i++) {
        $result[] = $i * $i; // ← постав тут брейкпоінт
    }
    return $result;
}

$squares = calculateSquares(5);
print_r($squares);



