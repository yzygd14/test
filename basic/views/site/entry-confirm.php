<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/18
 * Time: 16:51
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>