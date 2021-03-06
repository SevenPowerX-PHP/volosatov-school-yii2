<?php

	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

?>
<?php $this->beginPage(); ?>
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>VideoSchool</title>
		<?php $this->head(); ?>
	</head>
	<body>
		<?php $this->beginBody(); ?>
			<?php
				NavBar::begin([
					'brandLabel' => 'VideSchool',
					'brandUrl' => Yii::$app->homeUrl,
					'options' => [
						'class' => 'navbar-default navbar-fixed-top'
					]
				]);
				$menu = [
					'items' => [
						['label' => 'Join us', 'url' => ['/site/join']],
						['label' => 'Login', 'url' => ['/site/login']],
						['label' => 'About', 'url' => ['/site/about']]
					],
					'options' => ['class' => 'navbar-nav navbar-right']
				];
				echo Nav::widget($menu);
				NavBar::end();
			?>
			<div class="container" style="padding-top: 80px;">
				<?= $content; ?>
			</div>
		<?php $this->endBody(); ?>
	</body>
	</html>
<?php $this->endPage(); ?>