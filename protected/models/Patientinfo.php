<?php

/**
 * This is the model class for table "patientinfo".
 *
 * The followings are the available columns in table 'patientinfo':
 * @property string $personnummer
 * @property string $skadedatum
 * @property string $socialt
 * @property integer $alder_skadan
 * @property string $forsta_und_dat
 * @property string $yrke_fore_sk
 * @property string $klass_yrke
 * @property string $klass_hoger
 * @property string $klass_vanster
 * @property string $traumatyp
 * @property string $skadeniva
 * @property string $muskler_hoger
 * @property string $muskler_vanster
 * @property string $dom_hand_pre
 * @property string $dom_hand_post
 * @property string $avslutad
 * @property string $avslutad_dat
 * @property string $undersoknings_pl
 * @property string $barn
 * @property string $amdat
 * @property string $rollstol
 * @property string $annan_sjd
 * @property string $planerat_op
 * @property string $planerat_ab
 *
 * The followings are the available model relations:
 * @property Befolkningsinfo $personnummer0
 */
class Patientinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patientinfo';
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
			array('alder_skadan', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('socialt, skadeniva, rollstol', 'length', 'max'=>15),
			array('yrke_fore_sk, klass_yrke, undersoknings_pl', 'length', 'max'=>25),
			array('klass_hoger, klass_vanster, avslutad, barn', 'length', 'max'=>3),
			array('traumatyp', 'length', 'max'=>20),
			array('muskler_hoger, muskler_vanster, dom_hand_pre, dom_hand_post', 'length', 'max'=>2),
			array('annan_sjd', 'length', 'max'=>30),
			array('skadedatum, forsta_und_dat, avslutad_dat, amdat, planerat_op, planerat_ab', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, skadedatum, socialt, alder_skadan, forsta_und_dat, yrke_fore_sk, klass_yrke, klass_hoger, klass_vanster, traumatyp, skadeniva, muskler_hoger, muskler_vanster, dom_hand_pre, dom_hand_post, avslutad, avslutad_dat, undersoknings_pl, barn, amdat, rollstol, annan_sjd, planerat_op, planerat_ab', 'safe', 'on'=>'search'),
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
			'personnummer0' => array(self::BELONGS_TO, 'Befolkningsinfo', 'personnummer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personnummer' => 'Personnummer',
			'skadedatum' => 'Skadedatum',
			'socialt' => 'Socialt',
			'alder_skadan' => 'Ålder Skadan',
			'forsta_und_dat' => 'Första Und Dat',
			'yrke_fore_sk' => 'Yrke Före Sk',
			'klass_yrke' => 'Klass Yrke',
			'klass_hoger' => 'Klass Höger',
			'klass_vanster' => 'Klass Vänster',
			'traumatyp' => 'Traumatyp',
			'skadeniva' => 'Skadeniva',
			'muskler_hoger' => 'Muskler Höger',
			'muskler_vanster' => 'Muskler Vänster',
			'dom_hand_pre' => 'Dom Hand Pre',
			'dom_hand_post' => 'Dom Hand Post',
			'avslutad' => 'Avslutad',
			'avslutad_dat' => 'Avslutad Dat',
			'undersoknings_pl' => 'Undersöknings Pl',
			'barn' => 'Barn',
			'amdat' => 'Amdat',
			'rollstol' => 'Rollstol',
			'annan_sjd' => 'Annan Sjd',
			'planerat_op' => 'Planerat Op',
			'planerat_ab' => 'Planerat Ab',
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
		$criteria->compare('skadedatum',$this->skadedatum,true);
		$criteria->compare('socialt',$this->socialt,true);
		$criteria->compare('alder_skadan',$this->alder_skadan);
		$criteria->compare('forsta_und_dat',$this->forsta_und_dat,true);
		$criteria->compare('yrke_fore_sk',$this->yrke_fore_sk,true);
		$criteria->compare('klass_yrke',$this->klass_yrke,true);
		$criteria->compare('klass_hoger',$this->klass_hoger,true);
		$criteria->compare('klass_vanster',$this->klass_vanster,true);
		$criteria->compare('traumatyp',$this->traumatyp,true);
		$criteria->compare('skadeniva',$this->skadeniva,true);
		$criteria->compare('muskler_hoger',$this->muskler_hoger,true);
		$criteria->compare('muskler_vanster',$this->muskler_vanster,true);
		$criteria->compare('dom_hand_pre',$this->dom_hand_pre,true);
		$criteria->compare('dom_hand_post',$this->dom_hand_post,true);
		$criteria->compare('avslutad',$this->avslutad,true);
		$criteria->compare('avslutad_dat',$this->avslutad_dat,true);
		$criteria->compare('undersoknings_pl',$this->undersoknings_pl,true);
		$criteria->compare('barn',$this->barn,true);
		$criteria->compare('amdat',$this->amdat,true);
		$criteria->compare('rollstol',$this->rollstol,true);
		$criteria->compare('annan_sjd',$this->annan_sjd,true);
		$criteria->compare('planerat_op',$this->planerat_op,true);
		$criteria->compare('planerat_ab',$this->planerat_ab,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patientinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
