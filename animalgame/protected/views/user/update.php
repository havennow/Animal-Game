<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Usuário', 'url'=>array('index')),
	array('label'=>'Criar Usuário', 'url'=>array('create')),
	array('label'=>'Ver Usuário', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuário', 'url'=>array('admin')),
);
?>

<h1>Editar Usuário <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>