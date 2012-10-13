<?php

/**
 * This is the model class for table "tbl_resposta".
 *
 * The followings are the available columns in table 'tbl_resposta':
 * @property string $id
 * @property string $id_animal
 * @property string $id_questao
 * @property integer $valor
 *
 * The followings are the available model relations:
 * @property Questao $idQuestao
 * @property Animal $idAnimal
 */
class Resposta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Resposta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_resposta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_animal, id_questao', 'required'),
			array('valor', 'numerical', 'integerOnly'=>true),
			array('id_animal', 'length', 'max'=>11),
			array('id_questao', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_animal, id_questao, valor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idQuestao' => array(self::BELONGS_TO, 'Questao', 'id_questao'),
			'idAnimal' => array(self::BELONGS_TO, 'Animal', 'id_animal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_animal' => 'Animal',
			'idAnimal.nome' => 'Animal',
			'id_questao' => 'Questão',
			'idQuestao.nome' => 'Questão',
			'valor' => 'Resposta',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_animal',$this->id_animal,true);
		$criteria->compare('id_questao',$this->id_questao,true);
		$criteria->compare('valor',$this->valor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}