<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1461074054,
    'checksum' => '92957c28d12649d758081b48c8d79b27',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1460730403
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1460729295
            ],
            'plugins/highlight' => [
                'file' => 'user/config/plugins/highlight.yaml',
                'modified' => 1460730447
            ],
            'plugins/jscomments' => [
                'file' => 'user/config/plugins/jscomments.yaml',
                'modified' => 1460729295
            ],
            'plugins/relatedpages' => [
                'file' => 'user/config/plugins/relatedpages.yaml',
                'modified' => 1460729295
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1460729295
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1460747172
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1460730403
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1460749657
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1460729295
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1460729295
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1460729295
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1461073710
            ]
        ],
        'user/plugins' => [
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/highlight.yaml',
                'modified' => 1460749342
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1460730310
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1461073532
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1460730313
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1460729295
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1460729295
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1460730300
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1460729295
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1460729295
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1460729295
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1460729295
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/comments.yaml',
                'modified' => 1460729295
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1460729295
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1460729295
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'highlight' => [
                'enabled' => true,
                'theme' => 'default'
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect' => NULL,
                'parent_acl' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'access',
                        6 => 'state'
                    ],
                    'additional_params' => [
                        'access' => 'site.login'
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 1800,
                    'name' => 'grav-rememberme'
                ],
                'oauth' => [
                    'enabled' => false,
                    'user' => [
                        'autocreate' => false,
                        'access' => [
                            'site' => [
                                'login' => true
                            ]
                        ]
                    ],
                    'providers' => [
                        'Facebook' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Google' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'GitHub' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ]
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'your@email.here',
                'from_name' => NULL,
                'to' => 'your@email.here',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html'
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'theme' => 'grav',
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 4,
                'show_score' => false,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => true
                ]
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'comments' => [
                'enabled' => true,
                'enable_on_routes' => [
                    0 => '/blog'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ],
                'form' => [
                    'name' => 'comments',
                    'fields' => [
                        0 => [
                            'name' => 'name',
                            'label' => 'Name',
                            'placeholder' => 'Enter your name',
                            'autocomplete' => 'on',
                            'type' => 'text',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        1 => [
                            'name' => 'email',
                            'label' => 'Email',
                            'placeholder' => 'Enter your email address',
                            'type' => 'email',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        2 => [
                            'name' => 'text',
                            'label' => 'Message',
                            'placeholder' => 'Enter your message',
                            'type' => 'textarea',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        3 => [
                            'name' => 'date',
                            'type' => 'hidden',
                            'process' => [
                                'fillWithCurrentDateTime' => true
                            ]
                        ],
                        4 => [
                            'name' => 'title',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.page.header.title'
                        ],
                        5 => [
                            'name' => 'lang',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.language.getLanguage'
                        ],
                        6 => [
                            'name' => 'path',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.uri.path'
                        ],
                        7 => [
                            'name' => 'g-recaptcha-response',
                            'label' => 'Captcha',
                            'type' => 'captcha',
                            'recatpcha_site_key' => '6Lc-tBwTAAAAADlB_1PlLoo-wVoX8B7fRnUnD1tN',
                            'recaptcha_not_validated' => 'Captcha not valid!',
                            'validate' => [
                                'required' => true
                            ],
                            'process' => [
                                'ignore' => true
                            ]
                        ]
                    ],
                    'buttons' => [
                        0 => [
                            'type' => 'submit',
                            'value' => 'Submit'
                        ]
                    ],
                    'process' => [
                        0 => [
                            'email' => [
                                'subject' => '[New Comment] from {{ form.value.name|e }}',
                                'body' => '{% include \'forms/data.html.twig\' %}'
                            ]
                        ],
                        1 => [
                            'captcha' => [
                                'recatpcha_secret' => '6Lc-tBwTAAAAAPXok4XZNVuxoMTPbpkYKhWwCJKD'
                            ]
                        ],
                        2 => [
                            'addComment' => NULL
                        ],
                        3 => [
                            'message' => 'Thank you for writing your comment!'
                        ]
                    ]
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'jscomments' => [
                'enabled' => true,
                'provider' => '',
                'providers' => [
                    'disqus' => [
                        'shortname' => '',
                        'default_lang' => 'en'
                    ],
                    'intensedebate' => [
                        'acct' => ''
                    ],
                    'facebook' => [
                        'appId' => '',
                        'lang' => 'en_US',
                        'num_posts' => 5,
                        'colorscheme' => 'light',
                        'order_by' => 'social',
                        'width' => '100%'
                    ],
                    'muut' => [
                        'forum' => '',
                        'channel' => 'General',
                        'show_online' => false,
                        'show_title' => false,
                        'upload' => false,
                        'share' => true,
                        'widget' => false,
                        'lang' => 'en'
                    ]
                ]
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'Nitish\'s Blog',
            'author' => [
                'name' => 'Nitish',
                'email' => 'nitish_akalwadi@yahoo.co.in',
                'url' => 'http://nitishakalwadi.tk/',
                'logo' => NULL,
                'gravatar' => NULL,
                'description' => ''
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'month'
            ],
            'metadata' => [
                'description' => ''
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => ''
            ],
            'description' => '',
            'menu' => NULL
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'proxy_url' => NULL,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/blog',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'pinpress',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true
            ]
        ],
        'security' => [
            'salt' => 'xwCVbkvjYyU5Hh'
        ]
    ]
];
