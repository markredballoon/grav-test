<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp/www/grav_test/cmizen_test/user/themes/newtheme/blueprints.yaml',
    'modified' => 1466093262,
    'data' => [
        'name' => 'CustomTheme',
        'version' => '0.0.1',
        'description' => 'Custom Theme written for clivemizen.com',
        'icon' => 'empire',
        'author' => [
            'name' => 'Mark Mizen',
            'url' => 'http://markmizen.com',
            'email' => 'mark@markmizen.com'
        ],
        'homepage' => 'https://github.com/markmizen',
        'keywords' => 'none',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
