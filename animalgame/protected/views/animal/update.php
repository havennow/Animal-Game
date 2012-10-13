<?php
$this->breadcrumbs=array(
	'Animais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Animal', 'url'=>array('index')),
	array('label'=>'Criar Animal', 'url'=>array('create')),
	array('label'=>'Ver Animal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Animal', 'url'=>array('admin')),
);
?>

<h1>Editar Animal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>