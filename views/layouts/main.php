<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    
        <div> 
            <img src="<?= Yii::getAlias('@web')?>/img/h1.jpg" class="img-responsive" alt="header">
        </div>
    <div div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-ice-lolly-tasted"></span>บ้านไอติม<span class="glyphicon glyphicon-ice-lolly-tasted"></span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]); 
    
    $setting=[
            ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['/com-status']],
        ];
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span>&nbsp;หน้าแรก', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-sunglasses"></span>&nbsp;เกี่ยวกับ', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;ติดต่อ', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ทดสอบ', 'url' => ['/firest1/index']],
            ['label' => '<span class="glyphicon glyphicon-wrench"></span>&nbsp;ตั้งค่าระบบ', 'items' => $setting],
            Yii::$app->user->isGuest ? (
                ['label' => '<span class="glyphicon glyphicon-user"></span>', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
