<?php

class PlayController extends Controller
{
	public function actionIndex()
	{
		$data = new PlayForm;
		if(!isset($data->pergunta)){
			Yii::app()->session['qnt']=1;
		}
		Yii::app()->session['animal']=NULL;
			if(isset($_POST['PlayForm']))
			{
				$data->attributes=$_POST['PlayForm'];
					$qnt = Yii::app()->session['qnt'];
					if($qnt != 3){
				if($data->validate()){
					$qnt = Yii::app()->session['qnt'];
					if($data->id_pergunta > 0){
						    
						    
						    $resultado=$this->calcValues($data);
							$id=$data->id_pergunta;
							$criteria = new CDbCriteria;  
							$criteria->condition='id<:id';
							$criteria->params=array(':id'=>$id);
						    $questao=Questao::model()->findAll($criteria);
							foreach($questao as $k){
							$pergunta=$k->nome;
							$_id=$k->id;
							Yii::app()->session['qnt']=$qnt+1;
						    }
						      if(!$questao){
							    $questao=Questao::model()->findByPk($id);
							    $pergunta=$questao['nome'];
							    $_id=$questao['id'];
							Yii::app()->session['qnt']=$qnt+2;
							
							   
					        	}
						
						    }else{
							$questao=Questao::model()->findAll();
							foreach($questao as $k){
							$pergunta=$k->nome;
							$_id=$k->id;
							
							
						    }
						   
				    }
				}
			 }
			}else{
				$questao=Questao::model()->findAll();
				 foreach($questao as $k){
				    $pergunta=$k->nome;
				    $_id=$k->id;
				    }
				
			}
	
	    $data->pergunta=$pergunta;
	    $data->id_pergunta=$_id;
    if(Yii::app()->session['qnt']==3){
	$this->render('index',array('data'=>$data,'resultado'=>	$resultado));
    }else{
	$this->render('index',array('data'=>$data,'resultado'=>""));
    }
		
	}
	
	function calcValues($model){
		
	
		    $id_pergunta=$model->id_pergunta; 
            $valor=$model->valor;
           	$criteria = new CDbCriteria;  
			$criteria->condition='t.id_questao=:questao';
			$criteria->params=array(':questao'=>$id_pergunta);
			$model_now =  Resposta::model()->findAll($criteria);
		    

           	foreach($model_now as $k){
	        $ar = array();
	        if($k->valor == 1){
	        $animal_old=$k->id_animal;
	        $ar[$k->id_animal]=$k->id_animal;
	        	
	        
            }
	
	        $animal=$k->id_animal;
	        if($valor == 1){
			if($k->valor == $valor){
				foreach($ar as $c){
					if($c == $k->id_animal){
				Yii::app()->session['animal']=$k->id_animal;	
				Yii::app()->session['animal_s']=$k->id_animal;
					}
				}
					
					
           
	        }
	        }
	        if($valor == 0){
	   	   	if($k->valor == 0){
		if($animal_old <> $k->id_animal){
			
			Yii::app()->session['animal']=$k->id_animal;	
			if(Yii::app()->session['animal'] <> Yii::app()->session['animal_s'] ){
				Yii::app()->session['animal']=Yii::app()->session['animal_s'];
			}
		}
		    }
		
			}
		    }
				$session_animal=Yii::app()->session['animal'];
				if($session_animal){
				$model_animal = Animal::model()->findByPk($session_animal);
			    $nome_animal = "É um(a) ".$model_animal['nome']." ?";
	           }
	return $nome_animal;
	
}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}