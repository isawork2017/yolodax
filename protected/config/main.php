<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Virtual Coins',
	'defaultController' => 'Welcome',
	'sourceLanguage' => 'en',
	'preload'=>array('log'),

	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'ext.yii-mail.YiiMailMessage',
	),

	'behaviors'=>array(
        'onBeginRequest' => array(
            'class' => 'application.components.behaviors.BeginRequest'
        ),
    ),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		),
	),

	// application components
	'components'=>array(
		'request'=>array(
            'enableCsrfValidation'=>true,
        ),
		'mailer' => array(
			'class' => 'application.extensions.mailer.EMailer',
			'pathViews' => 'application.views.email',
			'pathLayouts' => 'application.views.email.layouts',
		),
		'user'=>array(
			'allowAutoLogin'=>true,
			'class' => 'application.components.WebUser',
		),
		'session'=>array(
			'class'=> 'system.web.CHttpSession',
			'autoStart'=>true,
		),
		'image'=>array(
			'class'=>'application.extensions.image.CImageComponent',
			'driver'=>'GD',
		),
		'backs'=>array(
			'class'=>'application.extensions.backs.CBacksComponent',
		),
		'coinsconfig'=>array(
			'class'=>'application.extensions.coinsconfig.CCoinsConfigComponent',
		),
		'coins'=>array(
			'class'=>'application.extensions.coins.CCoinsComponent',
		),
		'g2a'=>array(
			'class'=>'application.extensions.g2a.CGoogle2FAComponent',
		),
		'assetManager' => array(
			'linkAssets' => true,
			//'forceCopy' => true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'login'=>"welcome/login",
				'signup'=>"welcome/signup",
				"admin"=>"admin/index",
				"logout"=>"user/logout",
				"trade"=>"welcome/trade",
				"trade/<pair:[a-z_]+>"=>"welcome/trade",
				"user/forgot"=>"welcome/forgot",
				"user/api" => "api/api",
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/ 

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=zadmin_cryptocoinexchange15',
			'emulatePrepare' => true,
			'username' => 'admindb',
			'password' => '123456',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			'errorAction'=>'welcome/error',
		),

		'clientScript'=>array(
			'packages'=>array(
				'msc'=>array(
					'basePath'=>'assets',
					'depends'=>array('jquery'),
				),
				'msc0'=>array(
					'js'=>array('jquery.min.js','jquery.yii.js'),
					'depends'=>array('jquery'),
				),
				'mscc'=>array(
					'basePath'=>'assets',
					'css'=>array('css/style.css'),
				),
				'adcss'=>array(
					'basePath'=>'assets',
					'css'=>array('css/aadmin/style/css.css'),
				),
				'adbcss'=>array(
					'basePath'=>'assets',
					'css'=>array('css/aadmin/style/box.css'),
				),
				'msc1'=>array(
					'basePath'=>'assets',
					'js'=>array('jquery.form.js')
				),

			),

		),
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

	'params'=>array(
		'adminEmail'=>'test@gmail.com',
		'smtpUser' => 'coinxtoll@gmail.com',
		'smtpPass' => 'coinxtoll1234',
		'languages' => array('en'=>'English', 'hi'=>'हिन्दी',),
	),
);
