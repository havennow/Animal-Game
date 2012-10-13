<?php
$this->breadcrumbs=array(
	'Animais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Animal', 'url'=>array('index')),
	array('label'=>'Criar Animal', 'url'=>array('create')),
	array('label'=>'Editar Animal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Animal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Animal', 'url'=>array('admin')),
);
?>

<h1>Ver Animal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
