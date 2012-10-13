<?php
$this->breadcrumbs=array(
	'Questões'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Questão', 'url'=>array('index')),
	array('label'=>'Administrar Questão', 'url'=>array('admin')),
);
?>

<h1>Criar Questão</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>