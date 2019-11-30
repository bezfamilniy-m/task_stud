<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\db\Query;
use yii\data\SqlDataProvider;
$this->title = 'Успеваемость учащихся';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Журнал успеваемости студентов</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <p>

            </p>

            <?php Pjax::begin(); ?>

                <?php
                    $dataProvider =  new SqlDataProvider( [
                    'sql' => 'SELECT a.id, a.name, a.family, a.patronymic, a.year_stud, b.title_course, b.mark FROM students a JOIN subjects b ON a.id=b.id_student',
                    'sort' => [
                    'defaultOrder' =>  [
                    'year_stud' => SORT_DESC,
                    'name' => SORT_ASC
                    ],
                    'attributes' => [
                    'mark',
                    'name',
                    'patronymic',
                    'family',
                    'title_course',
                    'year_stud' => [ 'default' => SORT_DESC ],
                    ],
                    ],
                    'pagination' => [ 'pageSize' => 100 ],
                    ] );

                    $grid_id = 'Журнал успеваемости';
                    echo GridView::widget( [
                        'filterModel' => null,
                        'dataProvider' => $dataProvider,
                        'id' => $grid_id,
                        'tableOptions' => [
                        'class' => 'table table-borderless',
                        'id' => 'ranking-table'

                        ],
                    'layout' => '{items}',
                    'columns' => [
                        [ 'class' => yii\grid\SerialColumn::className() ],
                        'name',
                        'patronymic',
                        'family',
                        'title_course',
                        'year_stud',
                        'title_course',
                        'mark',
                        ]
                    ]
                    );
                    ?>
            <?php Pjax::end(); ?>

        </div>

    </div>
</div>
