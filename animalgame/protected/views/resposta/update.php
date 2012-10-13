<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Resposta', 'url'=>array('index')),
	array('label'=>'Criar Resposta', 'url'=>array('create')),
	array('label'=>'Ver Resposta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Resposta', 'url'=>array('admin')),
);
?>

<h1>Editar Resposta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>