<?php
$start_time = microtime(true);

ini_set('display_errors','On');
error_reporting(E_ALL);

define('APP_PATH', realpath('../app/'));
require APP_PATH . '/../vendor/autoload.php';

try {
    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/config/config.php";

    /**
     * Read auto-loader
     */
    include $config->application->appDir . "config/loader.php";

    /**
     * Read services
     */
    include $config->application->appDir . "config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    // 注册模块
    $application->registerModules(
        array(
            'user' => array(
                'className' => 'App\Modules\User\Module',
                'path'      => '../app/modules/user/Module.php',
            )
        )
    );

    if(!empty($argv[1])){
        $uri = trim($argv[1]);
        $application->getDI()->set('params',function() use($argv){
            $params_str = implode('&',array_slice($argv, 2));
            parse_str($params_str,$params);
            return $params;
        });
    }else{
        echo 'please input uri string.';
        exit();
    }

    echo $application->handle($uri)->getContent();
    $end_time = microtime(true);
    echo "\n";
    echo $end_time - $start_time;
} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}

