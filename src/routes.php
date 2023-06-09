<?php
session_start();
// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'users' => ['UserController', 'index',],
    'users/show' => ['UserController', 'show', ['id']],
    'users/add' => ['UserController', 'add',],
    'users/edit' => ['UserController', 'edit',],
    'users/delete' => ['UserController', 'delete',],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'contact' => ['ContactController', 'index',],
    'reservation' => ['ReservationController', 'add',],
    'reservation/show' => ['ReservationController', 'show',],
    'legal' => ['LegalController', 'rentalTerms'],
    'legal/insurance' => ['LegalController', 'insurance'],
    'legal/contact' => ['LegalController', 'contactUs'],
    'legal/terms' => ['LegalController', 'termConditions'],
    'legal/privacy' => ['LegalController', 'privacyPolice'],
    'beach' => ['CarController', 'beach'],
    'coast' => ['CarController', 'coast'],
    'edition' => ['CarController', 'edition'],
];
