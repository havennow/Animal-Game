<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Usuário', 'url'=>array('index')),
	array('label'=>'Criar Usuário', 'url'=>array('create')),
	array('label'=>'Editar Usuário', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Usuário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Ver Usuário #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
	
		'email',
	),
)); ?>
