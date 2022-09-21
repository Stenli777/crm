<?php

//var_dump($_GET); die;
include './errors/controller_not_found_error.php';
$route = explode('?',$_SERVER['REQUEST_URI'])[0];
$route = trim($route,'/');
//var_dump($route);
$controller = "controllers\\".ucfirst(explode('/',$route)[0]);
if(!$controller){
    $controller = "controllers\\".'Info';
}
$action = explode('/',$route)[1]??'index';
//$action = explode('/',$route)[1];
//var_dump($action);
spl_autoload_register(function($class){
 if (file_exists('./' . $class . '.php')){
     require_once './' . $class . '.php';
     return true;
 }
 return false;
});
try {
    new models\PDO();
//    if (!file_exists('./controllers/' . $controller . '.php')) {
//    throw new ControllerNotFoundError('file ' . './controllers/' . $controller . '.php' . ' not found');
//    }
//    require_once('./controllers/' . $controller . '.php');
//    $controller = ucfirst($controller);
    $x = new $controller();
    if ($_GET) {
        if ($_GET['id'] === null) {
            throw new GetNotFoundError('This GET not found');
        }
        $id = $_GET['id'];
        $x->$action($id);
    } else {$x->$action();}
} catch (ControllerNotFoundError $e) {
    http_response_code(404);
    include './html_errors/404.php';
} catch (GetNotFoundError $e) {
    http_response_code(501);
    echo $e->getMessage();
} catch (Throwable $e) {
    http_response_code(500);
    echo $e->getMessage();
}
//finally {
//    echo 'finally';
//}
