<?php

return new \Phalcon\Config(array(
    'application' => array(
        'baseUri'        => '/',
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'cacheDir'       => APP_PATH . '/cache/',
        'libraryDir'     => APP_PATH . '/library/',
        'extension'      => APP_PATH . '/library/extension/',
        'extOther'       => APP_PATH . '/library/other/',
        'logDir'         => APP_PATH . '/logs/',
    ),
    'dbProxy' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '123456',
        'dbname'      => 'test',
    ),
    'dbMaster' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '123456',
        'dbname'      => 'test',
    ),
    'sphinx' => array(
        'host'  =>'192.168.1.201',
        'port'  =>3315,
        'index' => array(
            'proIndex'=>'m_trade',
            'buyIndex'=>'m_newbuy',
            'comIndex'=>'m_company'
        ),
    ),
    'memPrefix' => array(
        'cateById'  => 'cateById',
        'cateByFid' =>  'cateByFid',
        'productByCid' => 'productByCid',//只分类搜素结果
        'productByCC' => 'productByCC',//分类cid以及国家countryid搜索结果
        'groupByCid' => 'groupByCid',

    )
));
