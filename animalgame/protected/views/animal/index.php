<?php
$this->breadcrumbs=array(
	'Animais',
);

$this->menu=array(
	array('label'=>'Criar Animal', 'url'=>array('create')),
	array('label'=>'Administrar Animal', 'url'=>array('admin')),
);
?>

<h1>Animais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
