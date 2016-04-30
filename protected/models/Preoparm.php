<?php

/**
 * This is the model class for table "preoparm".
 *
 * The followings are the available columns in table 'preoparm':
 * @property string $personnummer
 * @property string $operations_datum
 * @property string $veckor
 * @property string $ind_prox
 * @property string $ind_dist
 * @property string $ind_mellan
 * @property string $soll
 * @property string $grepp
 * @property string $styrka
 * @property string $flex_pass
 * @property string $flex_aktiv
 * @property string $ext_pass
 * @property string $ext_aktiv
 * @property string $rotation_inat
 * @property string $rotation_utat
 * @property string $komplikation
 * @property string $operator
 * @property string $optyp
 * @property string $soll_ejopsida
 * @property integer $extensionsdefekt
 *
 * The followings are the available model relations:
 * @property Optillfallen $personnummer0
 * @property Optillfallen $operationsDatum
 */
class Preoparm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preoparm';
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
			array('extensionsdefekt', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('veckor, ind_prox, ind_dist, ind_mellan', 'length', 'max'=>5),
			array('soll, grepp, styrka, flex_pass, flex_aktiv, ext_pass, ext_aktiv, rotation_inat, rotation_utat, soll_ejopsida', 'length', 'max'=>6),
			array('komplikation', 'length', 'max'=>50),
			array('operator', 'length', 'max'=>3),
			array('optyp', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, operations_datum, veckor, ind_prox, ind_dist, ind_mellan, soll, grepp, styrka, flex_pass, flex_aktiv, ext_pass, ext_aktiv, rotation_inat, rotation_utat, komplikation, operator, optyp, soll_ejopsida, extensionsdefekt', 'safe', 'on'=>'search'),
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
			'personnummer0' => array(self::BELONGS_TO, 'Optillfallen', 'personnummer'),
			'operationsDatum' => array(self::BELONGS_TO, 'Optillfallen', 'operations_datum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personnummer' => 'Personnummer',
			'operations_datum' => 'Operationsdatum',
			'veckor' => 'Veckor',
			'ind_prox' => 'Ind Prox',
			'ind_dist' => 'Ind Dist',
			'ind_mellan' => 'Ind Mellan',
			'soll' => 'Soll',
			'grepp' => 'Grepp',
			'styrka' => 'Styrka',
			'flex_pass' => 'Flex Pass',
			'flex_aktiv' => 'Flex Aktiv',
			'ext_pass' => 'Ext Pass',
			'ext_aktiv' => 'Ext Aktiv',
			'rotation_inat' => 'Rotation Inat',
			'rotation_utat' => 'Rotation Utat',
			'komplikation' => 'Komplikation',
			'operator' => 'Operator',
			'optyp' => 'Optyp',
			'soll_ejopsida' => 'Soll Ejopsida',
			'extensionsdefekt' => 'Extensionsdefekt',
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
		$criteria->compare('veckor',$this->veckor,true);
		$criteria->compare('ind_prox',$this->ind_prox,true);
		$criteria->compare('ind_dist',$this->ind_dist,true);
		$criteria->compare('ind_mellan',$this->ind_mellan,true);
		$criteria->compare('soll',$this->soll,true);
		$criteria->compare('grepp',$this->grepp,true);
		$criteria->compare('styrka',$this->styrka,true);
		$criteria->compare('flex_pass',$this->flex_pass,true);
		$criteria->compare('flex_aktiv',$this->flex_aktiv,true);
		$criteria->compare('ext_pass',$this->ext_pass,true);
		$criteria->compare('ext_aktiv',$this->ext_aktiv,true);
		$criteria->compare('rotation_inat',$this->rotation_inat,true);
		$criteria->compare('rotation_utat',$this->rotation_utat,true);
		$criteria->compare('komplikation',$this->komplikation,true);
		$criteria->compare('operator',$this->operator,true);
		$criteria->compare('optyp',$this->optyp,true);
		$criteria->compare('soll_ejopsida',$this->soll_ejopsida,true);
		$criteria->compare('extensionsdefekt',$this->extensionsdefekt);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Preoparm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
