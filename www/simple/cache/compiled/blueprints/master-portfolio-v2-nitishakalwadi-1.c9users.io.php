<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1460729370,
    'checksum' => '085cd6a6044d0fb0d0fa5c4dfb1e9e97',
    'files' => [
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1460729296
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1460729296
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1460729296
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1460729296
            ]
        ],
        'user/plugins' => [
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1460729296
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1460729296
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins'
            ],
            'plugins.problems' => [
                'type' => '_parent',
                'name' => 'plugins.problems'
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.problems.built_in_css' => [
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
                ],
                'name' => 'plugins.problems.built_in_css'
            ],
            'plugins.error' => [
                'type' => '_parent',
                'name' => 'plugins.error'
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes'
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404'
            ],
            'site' => [
                'type' => '_parent',
                'name' => 'site'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'placeholder' => 'PLUGIN_ADMIN.SITE_TITLE_PLACEHOLDER',
                'help' => 'PLUGIN_ADMIN.SITE_TITLE_HELP',
                'name' => 'site.title'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'help' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR_HELP',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TAXONOMY_TYPES_HELP',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'help' => 'PLUGIN_ADMIN.SUMMARY_SIZE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.FORMAT_HELP',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'help' => 'PLUGIN_ADMIN.DELIMITER_HELP',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'help' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_VALUE',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'help' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_VALUE',
                'name' => 'site.routes'
            ],
            'streams' => [
                'type' => '_parent',
                'name' => 'streams'
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system' => [
                'type' => '_parent',
                'name' => 'system'
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP',
                'name' => 'system.home.alias'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat'
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                '@data-options' => '\\Grav\\Common\\Utils::dateFormats',
                'options' => [
                    '' => 'Auto Guess or Enter Custom'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order'
            ],
            'system.pages.order.by' => [
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
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'placeholder' => 'e.g. .html',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'help' => 'PLUGIN_ADMIN.APPEND_URL_EXT_HELP',
                'name' => 'system.pages.append_url_extension'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE_HELP',
                'options' => [
                    301 => '301 - Permanent',
                    303 => '303 - Other',
                    307 => '307 - Temporary'
                ],
                'name' => 'system.pages.redirect_default_code'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'help' => 'PLUGIN_ADMIN.IGNORE_HIDDEN_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'help' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'placeholder' => 'e.g. en, fr',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'help' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.twig.umask_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                'help' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.umask_fix'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'help' => 'PLUGIN_ADMIN.CACHE_PERMS_HELP',
                'highlight' => '0755',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                'help' => 'PLUGIN_ADMIN.UPLOAD_LIMIT_HELP',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'help' => 'PLUGIN_ADMIN.FALLBACK_TYPES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'help' => 'PLUGIN_ADMIN.INLINE_TYPES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session'
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP',
                'name' => 'system.session.name'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'help' => 'PLUGIN_ADMIN.WRAPPED_SITE_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape',
                    'umask_fix' => 'system.twig.umask_fix'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug'
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name'
                ],
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'dynamic' => [
            'system.timezone' => [
                'options' => [
                    'function' => '\\Grav\\Common\\Utils::timezones',
                    'params' => [
                        
                    ]
                ]
            ],
            'system.pages.dateformat.default' => [
                'options' => [
                    'function' => '\\Grav\\Common\\Utils::dateFormats',
                    'params' => [
                        
                    ]
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
