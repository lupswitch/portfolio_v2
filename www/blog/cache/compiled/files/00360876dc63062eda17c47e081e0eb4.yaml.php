<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/portfolio/www/blog/user/plugins/simplesearch/blueprints.yaml',
    'modified' => 1460729295,
    'data' => [
        'name' => 'SimpleSearch',
        'version' => '1.6.2',
        'description' => 'Don\'t be fooled, the **SimpleSearch** plugin provides a **fast** and highly **configurable** way to search your content.',
        'icon' => 'search',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-simplesearch',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'simplesearch, plugin, search, page, content, find',
        'bugs' => 'https://github.com/getgrav/grav-plugin-simplesearch/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Route',
                    'default' => '/random',
                    'help' => 'Default route of the simplesearch plugin'
                ],
                'template' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Template',
                    'default' => 'simplesearch_results',
                    'help' => 'Name of the template for the search results'
                ],
                'filters.category' => [
                    'type' => 'selectize',
                    'label' => 'Category filter',
                    'help' => 'Comma separated list of category names',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'filter_combinator' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Filter Combinator',
                    'default' => 'and',
                    'options' => [
                        'and' => 'And - Boolean &&',
                        'or' => 'Or - Boolean ||'
                    ]
                ],
                'order.by' => [
                    'type' => 'select',
                    'size' => 'long',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                    'options' => [
                        'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                        'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                        'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                        'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                    ]
                ],
                'order.dir' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                    'highlight' => 'asc',
                    'default' => 'desc',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                    'options' => [
                        'asc' => 'PLUGIN_ADMIN.ASCENDING',
                        'desc' => 'PLUGIN_ADMIN.DESCENDING'
                    ]
                ]
            ]
        ]
    ]
];
