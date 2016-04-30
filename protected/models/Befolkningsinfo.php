<?php

/**
 * This is the model class for table "befolkningsinfo".
 *
 * The followings are the available columns in table 'befolkningsinfo':
 * @property string $personnummer
 * @property string $fnamn
 * @property string $enamn
 * @property string $kon
 * @property string $adress
 * @property string $ort
 * @property string $postnummer
 * @property string $lan
 * @property string $kommun
 * @property string $telefonnummer
 *
 * The followings are the available model relations:
 * @property Patientinto $patientinto
 * @property Muskelstatus[] $muskelstatuses
 */
class Befolkningsinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'befolkningsinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personnummer', 'required'),
			array('personnummer', 'length', 'max'=>12),
			array('fnamn, enamn, lan', 'length', 'max'=>100),
			array('kon', 'length', 'max'=>1),
			array('adress, ort, kommun', 'length', 'max'=>255),
			array('postnummer', 'length', 'max'=>6),
			array('telefonnummer', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, fnamn, enamn, kon, adress, ort, postnummer, lan, kommun, telefonnummer', 'safe', 'on'=>'search'),
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
			'patientinto' => array(self::HAS_ONE, 'Patientinto', 'personnummer'),
			'muskelstatuses' => array(self::HAS_MANY, 'Muskelstatus', 'personnummer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personnummer' => 'Personnummer',
			'fnamn' => 'Förnamn',
			'enamn' => 'Efternamn',
			'kon' => 'Kön',
			'adress' => 'Adress',
			'ort' => 'Ort',
			'postnummer' => 'Postnummer',
			'lan' => 'Lan',
			'kommun' => 'Kommun',
			'telefonnummer' => 'Telefonnummer',
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
		$criteria->compare('fnamn',$this->fnamn,true);
		$criteria->compare('enamn',$this->enamn,true);
		$criteria->compare('kon',$this->kon,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('ort',$this->ort,true);
		$criteria->compare('postnummer',$this->postnummer,true);
		$criteria->compare('lan',$this->lan,true);
		$criteria->compare('kommun',$this->kommun,true);
		$criteria->compare('telefonnummer',$this->telefonnummer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Befolkningsinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
