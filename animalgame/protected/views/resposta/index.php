<?php
$this->breadcrumbs=array(
	'Respostas',
);

$this->menu=array(
	array('label'=>'Criar Resposta', 'url'=>array('create')),
	array('label'=>'Administrar Resposta', 'url'=>array('admin')),
);
?>

<h1>Respostas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
