<?php

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
       "App\Model"              => $config->application->modelsDir,
       "App\Library\Helper"     => $config->application->libraryDir."helper/",
    )
);

$loader->register();
