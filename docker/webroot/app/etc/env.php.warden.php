<?php
return [
    'cache' => [
        'frontend' => [
            'default' => [
                'frontend_options' => [
                    'write_control' => false
                ],
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'frontend_options' => [
                    'write_control' => false
                ],
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => ''
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'system' => [
        'default' => [
            'design' => [
                'head' => [
                    'demonotice' => '1'
                ],
                'footer' => [
                    'absolute_footer' => '<script src="/livereload.js?port=443"></script>'
                ]
            ],
            'web' => [
                'secure' => [
                    'offloader_header' => 'X-Forwarded-Proto',
                    'use_in_frontend' => '1',
                    'use_in_adminhtml' => '1'
                ],
                'seo' => [
                    'use_rewrites' => '1'
                ],
                'url' => [
                    'use_store' => '0',
                    'redirect_to_base' => '1'
                ],
                'cookie' => [
                    'cookie_path' => null,
                    'cookie_httponly' => '1',
                    'cookie_restriction' => '0'
                ],
                'session' => [
                    'use_remote_addr' => '0',
                    'use_http_via' => '0',
                    'use_http_x_forwarded_for' => '0',
                    'use_http_user_agent' => '0',
                    'use_frontend_sid' => '1'
                ],
                'browser_capabilities' => [
                    'cookies' => '1',
                    'javascript' => '1',
                    'local_storage' => '0'
                ]
            ],
            'catalog' => [
                'frontend' => [
                    'list_allow_all' => '0',
                    'flat_catalog_category' => '0',
                    'flat_catalog_product' => '0'
                ],
                'search' => [
                    'engine' => 'elasticsearch7',
                    'enable_eav_indexer' => '1',
                    'elasticsearch7_server_hostname' => 'elasticsearch',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'magento2',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch7_server_timeout' => '15'
                ]
            ],
            'system' => [
                'full_page_cache' => [
                    'caching_application' => '2',
                    'ttl' => '604800'
                ]
            ],
            'dev' => [
                'front_end_development_workflow' => [
                    'type' => 'server_side_compilation'
                ],
                'template' => [
                    'allow_symlink' => '0',
                    'minify_html' => '0'
                ],
                'js' => [
                    'merge_files' => '0',
                    'enable_js_bundling' => '0',
                    'minify_files' => '0',
                    'translate_strategy' => 'dictionary',
                    'session_storage_logging' => '0',
                    'session_storage_key' => 'collected_errors'
                ],
                'css' => [
                    'merge_css_files' => '0',
                    'minify_files' => '0'
                ],
                'image' => [
                    'default_adapter' => 'GD2'
                ],
                'static' => [
                    'sign' => '0'
                ]
            ],
            'admin' => [
                'url' => [
                    'use_custom' => '0',
                    'use_custom_path' => '0'
                ],
                'security' => [
                    'use_form_key' => '1',
                    'use_case_sensitive_login' => '0',
                    'session_lifetime' => '7200',
                    'lockout_failures' => '6',
                    'lockout_threshold' => '30',
                    'password_lifetime' => '90',
                    'password_is_forced' => '1'
                ]
            ]
        ]
    ],
    'backend' => [
        'frontName' => 'backend'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '3244e454ee286913a6b9b4d7c82a47c1'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'redis',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '20',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'frenet_api_result' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Thu, 16 Dec 2021 13:34:39 +0000'
    ]
];
