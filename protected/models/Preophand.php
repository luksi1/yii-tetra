<?php

/**
 * This is the model class for table "preophand".
 *
 * The followings are the available columns in table 'preophand':
 * @property string $personnummer
 * @property string $operations_datum
 * @property string $veckor
 * @property string $ind_prox
 * @property string $ind_dist
 * @property string $ind_mellan
 * @property integer $soll
 * @property string $grepp
 * @property string $styrka_helhand
 * @property string $stryka_nyckelgrepp
 * @property string $flex_pass
 * @property string $ext_pass
 * @property string $rotation_inat
 * @property string $rotation_utat
 * @property string $komplikation
 * @property string $operator
 * @property string $optyp
 * @property string $soll_ejopsida
 * @property string $lage_prox
 * @property string $lage_distalt
 * @property string $lage_mellan
 * @property integer $opkod_1
 * @property integer $opkod_2
 * @property integer $opkod_3
 * @property integer $opkod_4
 * @property integer $opnummer_1
 * @property integer $opnummer_2
 * @property integer $opnummer_3
 * @property integer $opnummer_4
 * @property integer $opnummer_5
 * @property integer $ext_defekt_arm
 * @property integer $flex_kraft_arm
 *
 * The followings are the available model relations:
 * @property Optillfallen $personnummer0
 * @property Optillfallen $operationsDatum
 */
class Preophand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preophand';
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
			array('soll, opkod_1, opkod_2, opkod_3, opkod_4, opnummer_1, opnummer_2, opnummer_3, opnummer_4, opnummer_5, ext_defekt_arm, flex_kraft_arm', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('veckor, ind_prox, ind_dist, ind_mellan', 'length', 'max'=>5),
			array('grepp, styrka_helhand, stryka_nyckelgrepp, flex_pass, ext_pass, rotation_inat, rotation_utat, soll_ejopsida', 'length', 'max'=>6),
			array('komplikation', 'length', 'max'=>150),
			array('operator', 'length', 'max'=>3),
			array('optyp', 'length', 'max'=>60),
			array('lage_prox, lage_distalt, lage_mellan', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, operations_datum, veckor, ind_prox, ind_dist, ind_mellan, soll, grepp, styrka_helhand, stryka_nyckelgrepp, flex_pass, ext_pass, rotation_inat, rotation_utat, komplikation, operator, optyp, soll_ejopsida, lage_prox, lage_distalt, lage_mellan, opkod_1, opkod_2, opkod_3, opkod_4, opnummer_1, opnummer_2, opnummer_3, opnummer_4, opnummer_5, ext_defekt_arm, flex_kraft_arm', 'safe', 'on'=>'search'),
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
			'styrka_helhand' => 'Styrka Helhand',
			'stryka_nyckelgrepp' => 'Stryka Nyckelgrepp',
			'flex_pass' => 'Flex Pass',
			'ext_pass' => 'Ext Pass',
			'rotation_inat' => 'Rotation Inat',
			'rotation_utat' => 'Rotation Utat',
			'komplikation' => 'Komplikation',
			'operator' => 'Operator',
			'optyp' => 'Optyp',
			'soll_ejopsida' => 'Soll Ejopsida',
			'lage_prox' => 'Lage Prox',
			'lage_distalt' => 'Lage Distalt',
			'lage_mellan' => 'Lage Mellan',
			'opkod_1' => 'Opkod 1',
			'opkod_2' => 'Opkod 2',
			'opkod_3' => 'Opkod 3',
			'opkod_4' => 'Opkod 4',
			'opnummer_1' => 'Opnummer 1',
			'opnummer_2' => 'Opnummer 2',
			'opnummer_3' => 'Opnummer 3',
			'opnummer_4' => 'Opnummer 4',
			'opnummer_5' => 'Opnummer 5',
			'ext_defekt_arm' => 'Ext Defekt Arm',
			'flex_kraft_arm' => 'Flex Kraft Arm',
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
		$criteria->compare('soll',$this->soll);
		$criteria->compare('grepp',$this->grepp,true);
		$criteria->compare('styrka_helhand',$this->styrka_helhand,true);
		$criteria->compare('stryka_nyckelgrepp',$this->stryka_nyckelgrepp,true);
		$criteria->compare('flex_pass',$this->flex_pass,true);
		$criteria->compare('ext_pass',$this->ext_pass,true);
		$criteria->compare('rotation_inat',$this->rotation_inat,true);
		$criteria->compare('rotation_utat',$this->rotation_utat,true);
		$criteria->compare('komplikation',$this->komplikation,true);
		$criteria->compare('operator',$this->operator,true);
		$criteria->compare('optyp',$this->optyp,true);
		$criteria->compare('soll_ejopsida',$this->soll_ejopsida,true);
		$criteria->compare('lage_prox',$this->lage_prox,true);
		$criteria->compare('lage_distalt',$this->lage_distalt,true);
		$criteria->compare('lage_mellan',$this->lage_mellan,true);
		$criteria->compare('opkod_1',$this->opkod_1);
		$criteria->compare('opkod_2',$this->opkod_2);
		$criteria->compare('opkod_3',$this->opkod_3);
		$criteria->compare('opkod_4',$this->opkod_4);
		$criteria->compare('opnummer_1',$this->opnummer_1);
		$criteria->compare('opnummer_2',$this->opnummer_2);
		$criteria->compare('opnummer_3',$this->opnummer_3);
		$criteria->compare('opnummer_4',$this->opnummer_4);
		$criteria->compare('opnummer_5',$this->opnummer_5);
		$criteria->compare('ext_defekt_arm',$this->ext_defekt_arm);
		$criteria->compare('flex_kraft_arm',$this->flex_kraft_arm);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Preophand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
