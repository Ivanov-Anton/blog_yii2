<?php

/* @var $this yii\web\View */
/* @var \app\models\Airbagua_posts[] $posts  */


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
    <div class="body-content">
        <?php foreach($posts as $post):?>
        <div class="row">

            <div class="col-lg-4">
                <h2><?= $post['title'] ?></h2>

                <p><?= $post['shortDescription'] ?></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Подробнее &raquo;</a></p>
            </div>
        <?php endforeach;?>
        </div>

    </div>
</div>

