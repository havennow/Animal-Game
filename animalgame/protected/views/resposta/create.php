<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Resposta', 'url'=>array('index')),
	array('label'=>'Administrar Resposta', 'url'=>array('admin')),
);
?>

<h1>Criar Resposta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>