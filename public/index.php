<?php
require '../vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new AltoRouter();
<<<<<<< HEAD

$router->map('GET', '/' , 'login');
$router->map('GET', '/blog' , 'blog');
$router->map('GET', '/about' , 'about');
$router->map('GET', '/home' , 'home');
$router->map('GET', '/contact' , 'contact');

$match = $router->match();

if ($match !== null) {
    if (is_callable($match['target'])) {
       call_user_func_array($match['target'], $match['params']);
    }elseif ($match['target'] === 'blog') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'about') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'home') {
        require "{$match['target']}.php";
    }elseif ($match['target'] === 'contact') {
        require "../vue/contact/{$match['target']}.php";
    }elseif ($match['target']=== null) {
        echo 404;
    }
    else{
        require "../vue/login/{$match['target']}.php";
    }
}
=======
$router->map('GET', '/', 'login');
// composer
$router->map('GET', '/home', 'home');
$router->map('GET', '/contact', 'contact');
$router->map('GET', '/test', 'test');
$router->map('GET', '/Doctors', 'Doctors');
$router->map('GET', '/about', 'about');
$router->map('GET', '/Department', 'Department');
$router->map('GET', '/elements', 'elements');
$router->map('GET', '/blog', 'blog');
$router->map('GET', '/single-blog', 'single-blog');
$match = $router->match();
if ($match !== null) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } elseif ($match['target'] === 'contact') {
        require "../vue/contact/{$match['target']}.php";
    } elseif ($match['target'] === 'Doctors') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'about') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'Department') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'elements') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'single-blog') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'blog') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === 'home') {
        require "{$match['target']}.php";
    } elseif ($match['target'] === null) {
        require 'error.php';
    } else {
        require "../login/{$match['target']}.php";
    }
}

// if ($match !== null) {
//    $target=$match['target'];
//    switch ($target) {
//        case 'home':
//         require "{$match['target']}.php";
//            break;
//            case empty($match['target']):
//             require "error.php";
//                break;

//        default:
//        require "../login/login.php";
//            break;
//    }

// }
>>>>>>> c9e306d0fd890deccf9583cdfe98debd5995d238
