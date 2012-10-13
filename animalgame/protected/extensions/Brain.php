<?php

/**
 * Brain class file.
 */
class Brain extends CValidator

{

    public $animal;
    public $nao_animal;
    public function validateAttribute( $model, $attribute )

    {
            
            $id_pergunta=$model->id_pergunta; 
            $valor=$model->valor;
           	$criteria = new CDbCriteria;  
			$criteria->condition='t.id_questao=:questao';
			$criteria->params=array(':questao'=>$id_pergunta);
			$model_now =  Resposta::model()->findAll($criteria);

			
           		foreach($model_now as $k){
					
			if($k->valor == $valor){
				$this->animal=$k->id_animal;
			}
			if($this->animal){
			$model_animal = Animal::model()->findByPk($this->animal);
		    $nome_animal = $model_animal['nome']; 
		    $model->addError( $attribute, "$nome_animal" );
		    }
			
		}
					
		
		
   
       

    }

}

?>