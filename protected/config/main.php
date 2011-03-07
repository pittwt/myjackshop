<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
require(dirname(__FILE__) . DS . 'define.php');
$params = require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php');

return array(
	'id' => 'kanshen.me',
	'basePath'=>dirname(__FILE__). DIRECTORY_SEPARATOR .'..',
	'name'=>'看什么',
	'charset' => 'utf-8',
    'language' => 'zh_cn',
    'layout' => 'main',
	// preloading 'log' component
	//'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
	),

	'modules'=>array(
		'album' => array(
			'layout' => 'album'
		),
		'api' => array(),
		'chrome' => array(
			'layout' => 'chrome'
		),
	),

	// application components
	'components'=>array(
		/*
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'guestName' => '游客',
		),
		*/
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat' => 'path',
		    'showScriptName' => false,
		    //'urlSuffix' => '.html',
            'rules' => array(
		        '/' => 'site/index',
				'api' => 'api/site/index',
				'chrome' => 'chrome/site/index', 
				'meinv' => 'album/meinv',
				'meinv/<t:(new|hot)>' => 'album/meinv/index',
				'meinv/<id:\d+>' => 'album/meinv/list',
				'shuaige' => 'album/shuaige',
				'shuaige/<t:(new|hot)>' => 'album/shuaige/index',
				'shuaige/<id:\d+>' => 'album/shuaige/list',
            ),
		),

		'db'=>array(
			'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=mydb',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'persistent' => true,
		    'tablePrefix' => 'my_',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        /*
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),
		*/
		'cache' => array(
		    'class' => 'CFileCache',
		    'directoryLevel' => 2,
		),

		'assetManager' => array(
		    'basePath' => $params['resourceBasePath'] . 'assets',
		    'baseUrl' => $params['resourceBaseUrl'][0] . 'assets',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => $params,
);