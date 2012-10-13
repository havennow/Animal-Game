<?php
$this->breadcrumbs=array(
	'Questões'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Questão', 'url'=>array('index')),
	array('label'=>'Criar Questão', 'url'=>array('create')),
	array('label'=>'Editar Questão', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Questão', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Editar Questão', 'url'=>array('admin')),
);
?>

<h1>Ver Questão #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
