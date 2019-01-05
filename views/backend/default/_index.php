<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Siparis';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;



Portlet::begin(['title' => $this->title,'subTitle' => ' admin sayfası','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index', ['orders' => $orders]);


Portlet::end();
