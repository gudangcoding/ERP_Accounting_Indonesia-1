<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'ERP Indonesia',

		// preloading 'log' component
		'preload'=>array('log','bootstrap'),

		// autoloading model and component classes
		'import'=>array(
				'application.models.*',
				'application.components.*',
				'application.extensions.*',
				'application.reports.*',
				'application.extensions.fpdf.*',
				'application.extensions.phpmailer.*',
				'ext.bootstrap.widgets.*',
				'ext.facebook.*',
				'ext.facebook.lib.*',
				'ext.JasPHP.*',
				//'application.extensions.coolfieldset.*',
				//'application.extensions.php-sip.*',   //on trial

		),
		'modules'=>array(
				'm1',
				'm2',
				/**/
				'gii'=>array(
						'class'=>'system.gii.GiiModule',
						'password'=>'1234qwe',
						'generatorPaths'=>array(
								'bootstrap.gii', // Since 0.9.1
						),
				),
				/**/
				//masih lumayan OK
				'cal' => array(
						'debug' => true // For first run only!
				),
		),

		'defaultController'=>'site/login',

		'timeZone'=>'Asia/Jakarta',
		'sourceLanguage'=>'id_id',
		//'language'=>'id',

		'theme'=>'artisteer_bootstrap',

		// application components
		'components'=>array(

				'jasPHP' => array(
						'class' => 'JasPHP',
				),
				'cache'=>array(
						'class'=>'system.caching.CFileCache',
				),
					
				'settings'=>array(
						'class'                 => 'CmsSettings',
						'cacheComponentId'  => 'cache',
						'cacheId'           => 'global_website_settings',
						'cacheTime'         => 84000,
						'tableName'     => 's_settings',
						'dbComponentId'     => 'db',
						'createTable'       => true,
						'dbEngine'      => 'InnoDB',
				),

				'bootstrap'=>array(
						'class'=>'ext.bootstrap.components.Bootstrap',
				),

				//'swiftMailer' => array(
				//	'class' => 'ext.swiftMailer.SwiftMailer',
				//),

				'mailer' => array(
						'class' => 'ext.swiftMailer.SwiftMailer',
						// For SMTP
						'mailer' => 'smtp',
						'host'=>'smtp.mail.yahoo.co.id',
						//'port'=>465,
						'From'=>'peterjkambey@yahoo.co.id',
						'username'=>'peterjkambey',
						//'password'=>'',
						// For sendmail:
						//'mailer'=>'sendmail',
							
				),

				'user'=>array(
						// enable cookie-based authentication
						'allowAutoLogin'=>true,
				),
				'db'=>array(
						'connectionString' => 'mysql:host=localhost;dbname=laksana',
						'emulatePrepare' => true,
						'username' => 'root',    //mysql
						'password' => '1234qwe',
						'charset' => 'utf8',
						'tablePrefix' => '',
				),
				'errorHandler'=>array(
						// use 'site/error' action to display errors
						'errorAction'=>'site/error',
				),

				/*
				 'urlManager'=>array(
				 		'urlFormat'=>'path',
				 		//'showScriptName'=>false,
				 		'rules'=>array(
				 				//'<id:\d+>'=>'sUser/view',

				 				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				 				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				 				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				 		),
				 ),
*/

				'log'=>array(
						'class'=>'CLogRouter',
						'routes'=>array(
								array(
										'class'=>'CFileLogRoute',
										'levels'=>'error, warning',
								),
								// uncomment the following to show log messages on web pages
								/*
								 array(
								 		'class'=>'CWebLogRoute',
								 ),
*/
						),
				),
		),

		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params'=>require(dirname(__FILE__).'/params.php'),
);