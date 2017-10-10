<?php

include '../bootstrap/bootstrap.php';

var_dump(PUBLIC_DIR);

$route = request('route', 404);

echo $route;

//have a lokk at the request and return the name of controller 
//and name of the action that should handle this request
function getConrollerActionFromRequest() {

    //declare $routes as empty array
    $routes = [];

    //replace $routes with the variable $routes defined in web.php
    include ROUTES_DIR . '/web.php';

    $current_route = request('route','homepage');
    
    //if there is an item in $routes with $current_route for index
    if (isset($routes[$current_route])) {

        return $routes[$current_route];
    }

    else {
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }
    
}

function runControllerMethod ($controller_name, $action_name) {

    //include the index controller (test)
    include APP_DIR . '/controllers/' . $controller_name . '.php';

    //create the controller object
    $controller_class = '\\app\\controllers\\' . $controller_name;

    //create a new controller object
    $controller = new \app\controllers\indexController();

    //call the index action of the controller object
    echo $controller->$action_name();

}

//we get an array with the name of th controller and its action from request
$controller_action = getConrollerActionFromRequest();

//we run the right controller and its action
runControllerMethod($controller_action['controller'],$controller_action['action']);






