<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Resposta', 'url'=>array('index')),
	array('label'=>'Criar Resposta', 'url'=>array('create')),
	array('label'=>'Editar Resposta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Resposta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Resposta', 'url'=>array('admin')),
);
?>

<h1>Ver Resposta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
	
		'id_animal'=>'idAnimal.nome',
		'id_questao'=>'idQuestao.nome',
		
		array(
		 'name'=> 'valor',
		 'value' => $model->valor =='1' ? 'Sim':'Não',
		),
	),
)); ?>
