<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAnimal->nome), array('view', 'id'=>$data->id)); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('id_questao')); ?>:</b>
	<?php echo CHtml::encode($data->idQuestao->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php if($data->valor == 1){ $out='Sim';}else{$out='Não';} echo CHtml::encode($out); ?>
	<br />
	


</div>