<?php

$str=Yii::app()->name ." - Jogar";
$this->pageTitle=$str;
$this->breadcrumbs=array(
	'Jogar',
);?>
<h1>Jogar</h1>

<br/>
<center>
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'play-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	<?php 
	$session = Yii::app()->session['qnt'];
	if($session){
	echo CHtml::encode($resultado); 
    }
	?>


		<div class="row">
			<?php echo $form->labelEx($data,'pergunta'); ?>
			<?php echo $form->hiddenField($data,'id_pergunta');?>
			
			<?php echo $form->textField($data,'pergunta',array('size'=>80,'readonly'=>true)); ?>
			<?php echo $form->error($data,'pergunta'); ?>
		</div>

		<div class="row compactRadioGroup_play">
			<?php echo $form->labelEx($data,'valor'); echo "<br/>"; ?>
			<?php	$type = array(0 =>'Não', 1 =>'Sim');
			 echo $form->radioButtonList($data,'valor',$type,array('separator'=>''));
		     ?>
			<?php echo $form->error($data,'valor'); ?>
		</div>
	

	
		<div class="row buttons">
			<?php echo CHtml::submitButton('Responder'); ?>
		</div>
		<?php
		  if(Yii::app()->session['qnt']==3){
			$html = '<div class="row buttons">';
			$html .= CHtml::htmlButton ('Jogar novamente!', array('onClick'=>'window.location="'.Yii::app()->getRequest()->getUrl().'"'));
			$html .='</div>';
			echo $html;
			}
			?>
	

	<?php $this->endWidget(); ?>
	</div><!-- form -->
</center>

