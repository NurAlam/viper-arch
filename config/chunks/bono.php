<?php

// BONO
return array(
    // Using prettyURL
    'bono.prettifyURL' => false,

    // The providers
    'bono.providers' => array(
        '\\KrisanAlfa\\Blade\\Provider\\BladeProvider',
        '\\Norm\\Provider\\NormProvider',
    ),

    // The Middlewares
    'bono.middlewares' => array(
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
        '\\Bono\\Middleware\\ControllerMiddleware',
    ),

    // Content Negotiatior
    'bono.contentNegotiator' => array(
        'extensions' => array(
            'json' => 'application/json',
        ),
        'views' => array(
            'application/json' => '\\Bono\\View\\JsonView',
        ),
    ),

    // Application Controller
    'bono.controllers' => array(
        'default' => '\\Norm\\Controller\\NormController',
        'mapping' => array(
            '/user'  => null,
        ),
    ),

    // Blade Template Engine
    'bono.blade' => array(
        'templates' => array('../templates'),
        'cache'     => '../cache',
    ),

    // Bono Themeing
    'bono.theme' => array(
        'class' => '\\KrisanAlfa\\Theme\\BladeTheme',
    ),

    // Bono Partial (segment of template)
    'bono.partial.view' => '\\KrisanAlfa\\Blade\\BonoBlade',
);
