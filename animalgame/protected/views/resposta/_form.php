<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resposta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_animal'); ?>
			<?php
			    echo $form->dropDownList($model, 'id_animal', CHtml::listData(
				Animal::model()->findAll(), 'id', 'nome'),
				array('prompt' => 'Selecione',
				'options' => array("Selecione" =>array('selected'=>true)),
				)
				);
		     ?>
		<?php echo $form->error($model,'id_animal'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_questao'); ?>
			<?php
			    echo $form->dropDownList($model, 'id_questao', CHtml::listData(
				Questao::model()->findAll(), 'id', 'nome'),
				array('prompt' => 'Selecione',
				'options' => array("Selecione" =>array('selected'=>true)),
				)
				);
		     ?>
	
		<?php echo $form->error($model,'id_questao'); ?>
	</div>

	<div class="row compactRadioGroup">
		<?php echo $form->labelEx($model,'valor'); echo "<br/>"; ?>
		<?php	$type = array(0 =>'Não', 1 =>'Sim');
		 echo $form->radioButtonList($model,'valor',$type,array('separator'=>''));
	     ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>
   <br/>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->