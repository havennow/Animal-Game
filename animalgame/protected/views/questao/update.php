<?php
$this->breadcrumbs=array(
	'Questões'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Questão', 'url'=>array('index')),
	array('label'=>'Criar Questão', 'url'=>array('create')),
	array('label'=>'Ver Questão', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Adminsitrar Questão', 'url'=>array('admin')),
);
?>

<h1>Editar Questão <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>