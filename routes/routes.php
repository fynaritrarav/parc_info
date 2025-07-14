<?php

Router::get('/user/addUser', 'UserController','addUser');
Router::post('/user/storeUser', 'UserController','storeUser');
Router::get('/user/listUser', 'UserController','listUser');
Router::get('/home', 'HomeController','index');
Router::post('/user/buttonUser', 'UserController','buttonUser');
Router::get('/user/researchUser', 'UserController','researchUser');
Router::get('/fournisseur/addFournisseur', 'FournisseurController','addFournisseur');

