<?php

    return [
        'id' => 'lukankin.ru',
        'basePath' => realpath(__DIR__ . '/../'),
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false, 
                'rules' => [
                    '/' => 'site/index',
                    '<action:\w+>' => 'site/<action>'
                ]
            ]
        ]
    ];