<?php 
$str=Yii::app()->name ." - Jogar";
$this->pageTitle=$str; 
?>


<p>
Bem vindo ao jogo Animal Game , clique abaixo e começe o jogo.
</p>
<?php
echo CHtml::link('Jogar',array('Play/index')); 
?>