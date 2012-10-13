<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Usuário', 'url'=>array('index')),
	array('label'=>'Administar Usuário', 'url'=>array('admin')),
);
?>

<h1>Criar Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>