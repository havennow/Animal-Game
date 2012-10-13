<?php
$this->breadcrumbs=array(
	'Animais'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Animal', 'url'=>array('index')),
	array('label'=>'Administrar Animal', 'url'=>array('admin')),
);
?>

<h1>Criar Animal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>