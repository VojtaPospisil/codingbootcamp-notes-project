<?php

include '../bootstrap/bootstrap.php';

var_dump(PUBLIC_DIR);

$route = request('route', 404);

echo $route;

