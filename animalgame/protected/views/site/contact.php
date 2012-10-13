<?php
$this->pageTitle=Yii::app()->name . ' - Contato';
$this->breadcrumbs=array(
	'Contato',
);
?>

<h1>Contato</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<center>
<p>
Telefone celular : (41)8508-5988 <br/>
E-mail : havennow@gmail.com <br/>
Guilherme Trevisan de Oliveira.
</p>
</center>


<?php endif; ?>