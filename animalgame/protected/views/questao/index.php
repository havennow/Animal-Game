<?php
$this->breadcrumbs=array(
	'Questões',
);

$this->menu=array(
	array('label'=>'Criar Questão', 'url'=>array('create')),
	array('label'=>'Administrar Questão', 'url'=>array('admin')),
);
?>

<h1>Questões</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
