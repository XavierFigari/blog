<?php

<?php

$routes = [
    "404" => '../ressources/views/errors/404.php',
];

$p = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (array_key_exists($p, $routes)) {
    ob_start();
    include $routes[$p];
    $render = ob_get_clean();
    echo $render;
} else {
    http_response_code(404);
    include '../ressources/views/errors/404.php'
    exit;
}

?>

