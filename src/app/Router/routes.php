<?php


Router::get( '/', ['HomeController', 'index']);
Router::get( '/', ['AuthController', 'login']);
Router::post( '/', ['AuthController', 'auth']);
Router::get( '/users', ['UsersController', 'index']);

