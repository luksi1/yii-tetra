<?php

/**
 * This is the model class for table "aterarm".
 *
 * The followings are the available columns in table 'aterarm':
 * @property string $personnummer
 * @property string $operations_datum
 * @property string $besok_datum
 * @property string $veckor
 * @property string $ind_prox
 * @property string $ind_dist
 * @property string $ind_mellan
 * @property string $elong_prox
 * @property string $elong_mellan
 * @property string $elong_dist
 * @property string $soll
 * @property string $styrka_ext_1
 * @property string $flex_pass
 * @property string $flex_aktiv
 * @property string $ext_pass
 * @property string $ext_aktiv
 * @property string $rotation_inat
 * @property string $rotation_utat
 * @property string $komplikation
 * @property integer $ext_aktiv_avlast
 * @property integer $styrka_ext_2
 * @property integer $styrka_ext_3
 * @property integer $styrka_flex_1
 * @property integer $styrka_flex_2
 * @property integer $styrka_flex_3
 * @property string $kommentar
 *
 * The followings are the available model relations:
 * @property Optillfallen $personnummer0
 * @property Optillfallen $operationsDatum
 */
class Aterarm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aterarm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personnummer, operations_datum, besok_datum', 'required'),
			array('ext_aktiv_avlast, styrka_ext_2, styrka_ext_3, styrka_flex_1, styrka_flex_2, styrka_flex_3', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('veckor, ind_prox, ind_dist, ind_mellan, elong_prox, elong_mellan, elong_dist', 'length', 'max'=>5),
			array('soll, styrka_ext_1, flex_pass, flex_aktiv, ext_pass, ext_aktiv, rotation_inat, rotation_utat', 'length', 'max'=>6),
			array('komplikation', 'length', 'max'=>50),
			array('kommentar', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, operations_datum, besok_datum, veckor, ind_prox, ind_dist, ind_mellan, elong_prox, elong_mellan, elong_dist, soll, styrka_ext_1, flex_pass, flex_aktiv, ext_pass, ext_aktiv, rotation_inat, rotation_utat, komplikation, ext_aktiv_avlast, styrka_ext_2, styrka_ext_3, styrka_flex_1, styrka_flex_2, styrka_flex_3, kommentar', 'safe', 'on'=>'search'),
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
			'besok_datum' => 'Besök Datum',
			'veckor' => 'Veckor',
			'ind_prox' => 'Ind Prox',
			'ind_dist' => 'Ind Dist',
			'ind_mellan' => 'Ind Mellan',
			'elong_prox' => 'Elong Prox',
			'elong_mellan' => 'Elong Mellan',
			'elong_dist' => 'Elong Dist',
			'soll' => 'Soll',
			'styrka_ext_1' => 'Styrka Ext 1',
			'flex_pass' => 'Flex Pass',
			'flex_aktiv' => 'Flex Aktiv',
			'ext_pass' => 'Ext Pass',
			'ext_aktiv' => 'Ext Aktiv',
			'rotation_inat' => 'Rotation Inat',
			'rotation_utat' => 'Rotation Utat',
			'komplikation' => 'Komplikation',
			'ext_aktiv_avlast' => 'Ext Aktiv Avlast',
			'styrka_ext_2' => 'Styrka Ext 2',
			'styrka_ext_3' => 'Styrka Ext 3',
			'styrka_flex_1' => 'Styrka Flex 1',
			'styrka_flex_2' => 'Styrka Flex 2',
			'styrka_flex_3' => 'Styrka Flex 3',
			'kommentar' => 'Kommentar',
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
		$criteria->compare('besok_datum',$this->besok_datum,true);
		$criteria->compare('veckor',$this->veckor,true);
		$criteria->compare('ind_prox',$this->ind_prox,true);
		$criteria->compare('ind_dist',$this->ind_dist,true);
		$criteria->compare('ind_mellan',$this->ind_mellan,true);
		$criteria->compare('elong_prox',$this->elong_prox,true);
		$criteria->compare('elong_mellan',$this->elong_mellan,true);
		$criteria->compare('elong_dist',$this->elong_dist,true);
		$criteria->compare('soll',$this->soll,true);
		$criteria->compare('styrka_ext_1',$this->styrka_ext_1,true);
		$criteria->compare('flex_pass',$this->flex_pass,true);
		$criteria->compare('flex_aktiv',$this->flex_aktiv,true);
		$criteria->compare('ext_pass',$this->ext_pass,true);
		$criteria->compare('ext_aktiv',$this->ext_aktiv,true);
		$criteria->compare('rotation_inat',$this->rotation_inat,true);
		$criteria->compare('rotation_utat',$this->rotation_utat,true);
		$criteria->compare('komplikation',$this->komplikation,true);
		$criteria->compare('ext_aktiv_avlast',$this->ext_aktiv_avlast);
		$criteria->compare('styrka_ext_2',$this->styrka_ext_2);
		$criteria->compare('styrka_ext_3',$this->styrka_ext_3);
		$criteria->compare('styrka_flex_1',$this->styrka_flex_1);
		$criteria->compare('styrka_flex_2',$this->styrka_flex_2);
		$criteria->compare('styrka_flex_3',$this->styrka_flex_3);
		$criteria->compare('kommentar',$this->kommentar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aterarm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
