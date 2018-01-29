<?php
/*
MIT License

Copyright (c) 2018 Prince E. Darlington <?ekeminyd@gmail.com?>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
$router = new Network\Router\Router();
$router->routes('',['controller'=>'HomeController','action'=>'index']);
$router->routes('create',['controller'=>'HomeController','action'=>'createposts']);
$router->routes('view/{id:\d+}',['controller'=>'HomeController','action'=>'viewposts']);
$router->routes('delete/{id:\d+}',['controller'=>'HomeController','action'=>'deleteposts']);
$router->routes('update/{id:\d+}',['controller'=>'HomeController','action'=>'updateposts']);
$router->routes('comment/{id:\d+}',['controller'=>'HomeController','action'=>'commentposts']);
$router->routes('adduser',['controller'=>'HomeController','action'=>'createuser']);
$router->routes('login',['controller'=>'HomeController','action'=>'login']);
$router->routes('user/{id:\d+}',['controller'=>'HomeController','action'=>'allusers']);

$router->routes('{controller}/{action}');
$router->routes('{controller}/{action}/{id:\d+}');
$router->routes('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->dispatch($_SERVER['QUERY_STRING']);
