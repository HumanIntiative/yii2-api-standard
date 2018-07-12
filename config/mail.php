<?php return [
	'class' => 'yii\swiftmailer\Mailer',
	/*'view' => [
		'class'=>'app\components\web\ViewMail',
	],*/
	'viewPath' => '@app/views/mail',
	'useFileTransport' => false,
	'transport' => [
		'class' => 'Swift_SmtpTransport',
		'host' => 'smtp.mailtrap.io',
		'username' => 'f5e92782f2157c',
		'password' => '04bbb84354a3eb',
		'port' => '2525',
		'encryption' => 'tls',
	],
];