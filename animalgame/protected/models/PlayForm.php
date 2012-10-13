<?php

/**
 * PlayForm class.
 * PlayForm is the data structure for keeping
 * Play form data. It is used by the 'Play' action of 'SiteController'.
 */
class PlayForm extends CFormModel
{
	public $pergunta;
	public $valor;
	public $id_pergunta;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('id_pergunta,valor','required'),
		
			// email has to be a valid email address
		
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'valor'=>'Resposta',
		    'pergunta'=>'Pergunta?',
		);
	}
	

	
}