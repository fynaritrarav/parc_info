<?php

Router::get('/user/addUser', 'UserController','addUser');
Router::post('/user/storeUser', 'UserController','storeUser');
Router::get('/user/listUser', 'UserController','listUser');

Router::get('/home', 'HomeController','index');

Router::post('/user/buttonUser', 'UserController','buttonUser');
Router::get('/user/researchUser', 'UserController','researchUser');

Router::get('/fournisseur/addFournisseur', 'FournisseurController','addFournisseur');
Router::post('/fournisseur/storeFournisseur', 'FournisseurController','storeFournisseur');
Router::get('/fournisseur/listFournisseur', 'FournisseurController','listFournisseur');

Router::get('/fournisseur/listUser', 'UserController','listUser');

Router::post('/fournisseur/buttonFournisseur', 'FournisseurController','buttonFournisseur');
Router::get('/fournisseur/researchFournisseur', 'FournisseurController','researchFournisseur');

Router::get('/emplacement/addEmplacement', 'EmplacementController','addEmplacement');
Router::post('/emplacement/storeEmplacement', 'EmplacementController','storeEmplacement');
Router::get('/emplacement/listEmplacement', 'EmplacementController','listEmplacement');
Router::post('/emplacement/buttonEmplacement', 'EmplacementController', 'buttonEmplacement');
Router::get('/emplacement/researchEmplacement', 'EmplacementController', 'researchEmplacement');

Router::get('/machine/addMachine', 'MachineController','addMachine');
Router::post('/machine/storeMachine', 'MachineController','storeMachine');
Router::get('/machine/listMachine', 'MachineController','listMachine');
Router::post('/machine/buttonMachine', 'MachineController','buttonMachine');
Router::get('/machine/researchMachine', 'MachineController','researchMachine');

Router::get('/peripherique/addPeripherique', 'PeripheriqueController', 'addPeripherique');
Router::post('/peripherique/storePeripherique', 'PeripheriqueController', 'storePeripherique');
Router::get('/peripherique/listPeripherique', 'PeripheriqueController', 'listPeripherique');
Router::post('/peripherique/buttonPeripherique', 'PeripheriqueController', 'buttonPeripherique');
Router::get('/peripherique/researchPeripherique', 'PeripheriqueController', 'researchPeripherique');

