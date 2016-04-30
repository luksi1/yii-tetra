<?php

/**
 * This is the model class for table "optillfallen".
 *
 * The followings are the available columns in table 'optillfallen':
 * @property string $personnummer
 * @property string $operations_datum
 * @property string $operations_text
 * @property string $sida
 *
 * The followings are the available model relations:
 * @property Preoparm[] $preoparms
 * @property Preoparm[] $preoparms1
 * @property Preophand[] $preophands
 * @property Preophand[] $preophands1
 * @property Aterhand[] $aterhands
 * @property Aterhand[] $aterhands1
 * @property Aterarm[] $aterarms
 * @property Aterarm[] $aterarms1
 */
class Optillfallen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'optillfallen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personnummer, operations_datum', 'required'),
			array('personnummer', 'length', 'max'=>12),
			array('operations_text', 'length', 'max'=>200),
			array('sida', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, operations_datum, operations_text, sida', 'safe', 'on'=>'search'),
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
			'preoparms' => array(self::HAS_MANY, 'Preoparm', 'personnummer'),
			'preoparms1' => array(self::HAS_MANY, 'Preoparm', 'operations_datum'),
			'preophands' => array(self::HAS_MANY, 'Preophand', 'personnummer'),
			'preophands1' => array(self::HAS_MANY, 'Preophand', 'operations_datum'),
			'aterhands' => array(self::HAS_MANY, 'Aterhand', 'personnummer'),
			'aterhands1' => array(self::HAS_MANY, 'Aterhand', 'operations_datum'),
			'aterarms' => array(self::HAS_MANY, 'Aterarm', 'personnummer'),
			'aterarms1' => array(self::HAS_MANY, 'Aterarm', 'operations_datum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personnummer' => 'Personnummer',
			'operations_datum' => 'Operations Datum',
			'operations_text' => 'Operations Text',
			'sida' => 'Sida',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('personnummer',$this->personnummer,true);
		$criteria->compare('operations_datum',$this->operations_datum,true);
		$criteria->compare('operations_text',$this->operations_text,true);
		$criteria->compare('sida',$this->sida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Optillfallen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
