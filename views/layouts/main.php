<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php print Url::base(true).'/web/resources/images/logos/bmosoluciones.ico'; ?>" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    
    
    
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap"> 
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->params['panelClienteNombre'],
        'brandUrl' => Url::base(true),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Entrar', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Cerrar Sesión (' . Yii::$app->user->identity->usuario_nombre . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?php print Yii::$app->params['panelClienteNombre']; ?> <?= date('Y') ?></p>

        <p class="pull-right">BMO Soluciones Tecnológicas C.A. 
	    	<strong><a href="http://bmosoluciones.com" target="_blank">www.bmosoluciones.com</a>.</strong> 
	    	</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
