<?php

return array(
    'home'           => array(
        'pattern'    => '/',
        'controller' => 'PostController',
        'action'     => 'index'
    ),
    'show_post'      => array(
        'pattern'       => '/post/{id}',
        'controller'    => 'PostController',
        'action'        => 'show',
        '_requirements' => array('id' => '\d+')
    ),
    'show_by_category'      => array(
        'pattern'       => '/category/{id}',
        'controller'    => 'CategoryController',
        'action'        => 'show',
        '_requirements' => array('id' => '\d+')
    ),

    'add_post'       => array(
        'pattern'    => '/post/add',
        'controller' => 'PostController',
        'action'     => 'add',
        'security'   => array('ROLE_USER'),
    ),
//    'edit_post'      => array(
//        'pattern'       => '/post/{id}/edit',
//        'controller'    => 'BlogController',
//        'action'        => 'edit',
//        '_requirements' => array(
//            'id'      => '\d+',
//            '_method' => 'POST'
//        )
//    ),

//    'admin'         => array(
//        'pattern'    => '/admin',
//        'controller' => 'AdminController',
//        'action'     => 'index'
//    ),

    'page_about'         => array(
        'pattern'    => '/about',
        'controller' => 'PageController',
        'action'     => 'about'
    ),
    'page_portfolio'         => array(
        'pattern'    => '/portfolio',
        'controller' => 'PageController',
        'action'     => 'portfolio'
    ),
    'page_contacts'         => array(
        'pattern'    => '/contacts',
        'controller' => 'PageController',
        'action'     => 'contacts'
    ),

    'signin'         => array(
        'pattern'    => '/signin',
        'controller' => 'SecurityController',
        'action'     => 'signin'
    ),
    'login'          => array(
        'pattern'    => '/login',
        'controller' => 'SecurityController',
        'action'     => 'login'
    ),
    'logout'         => array(
        'pattern'    => '/logout',
        'controller' => 'SecurityController',
        'action'     => 'logout'
    ),

//    'update_profile' => array(
//        'pattern'       => '/profile',
//        'controller'    => 'ProfileController',
//        'action'        => 'update',
//        '_requirements' => array(
//            '_method' => 'POST'
//        )
//    ),
//    'profile'        => array(
//        'pattern'    => '/profile',
//        'controller' => 'ProfileController',
//        'action'     => 'get'
//    ),
);