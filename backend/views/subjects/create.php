<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subjects */

$this->title = 'Новый курс';
$this->params['breadcrumbs'][] = ['label' => 'subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
