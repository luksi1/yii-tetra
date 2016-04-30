<?php

/**
 * This is the model class for table "aterhand".
 *
 * The followings are the available columns in table 'aterhand':
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
 * @property string $grepp
 * @property string $styrka_helhand
 * @property string $stryka_nyckelgrepp
 * @property string $akt_knyt_diastas_1
 * @property string $akt_knyt_diastas_2
 * @property string $akt_knyt_diastas_3
 * @property string $akt_knyt_diastas_4
 * @property integer $flex_pass_handled
 * @property integer $ext_pass_handled
 * @property integer $pronation
 * @property integer $supination
 * @property string $kommentar
 * @property string $akt_knyt_diastas_5
 * @property integer $soll_icke_op_sida
 * @property integer $opkod_1
 * @property integer $opkod_2
 * @property integer $opkod_3
 * @property integer $opkod_4
 * @property integer $ext_pas_arm
 * @property integer $ext_akt_arm
 * @property integer $ext_avl_arm
 * @property integer $styrka_ext_arm
 * @property integer $styrka_flex_arm
 * @property integer $flexion_mcp1
 * @property integer $extension_ip
 * @property integer $flexion_ip
 *
 * The followings are the available model relations:
 * @property Optillfallen $personnummer0
 * @property Optillfallen $operationsDatum
 */
class Aterhand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aterhand';
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
			array('flex_pass_handled, ext_pass_handled, pronation, supination, soll_icke_op_sida, opkod_1, opkod_2, opkod_3, opkod_4, ext_pas_arm, ext_akt_arm, ext_avl_arm, styrka_ext_arm, styrka_flex_arm, flexion_mcp1, extension_ip, flexion_ip', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('veckor, ind_prox, ind_dist, ind_mellan, elong_prox, elong_mellan, elong_dist', 'length', 'max'=>5),
			array('soll, grepp, styrka_helhand, stryka_nyckelgrepp, akt_knyt_diastas_1, akt_knyt_diastas_2, akt_knyt_diastas_3, akt_knyt_diastas_4, akt_knyt_diastas_5', 'length', 'max'=>6),
			array('kommentar', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, operations_datum, besok_datum, veckor, ind_prox, ind_dist, ind_mellan, elong_prox, elong_mellan, elong_dist, soll, grepp, styrka_helhand, stryka_nyckelgrepp, akt_knyt_diastas_1, akt_knyt_diastas_2, akt_knyt_diastas_3, akt_knyt_diastas_4, flex_pass_handled, ext_pass_handled, pronation, supination, kommentar, akt_knyt_diastas_5, soll_icke_op_sida, opkod_1, opkod_2, opkod_3, opkod_4, ext_pas_arm, ext_akt_arm, ext_avl_arm, styrka_ext_arm, styrka_flex_arm, flexion_mcp1, extension_ip, flexion_ip', 'safe', 'on'=>'search'),
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
			'grepp' => 'Grepp',
			'styrka_helhand' => 'Styrka Helhand',
			'stryka_nyckelgrepp' => 'Stryka Nyckelgrepp',
			'akt_knyt_diastas_1' => 'Akt Knyt Diastas 1',
			'akt_knyt_diastas_2' => 'Akt Knyt Diastas 2',
			'akt_knyt_diastas_3' => 'Akt Knyt Diastas 3',
			'akt_knyt_diastas_4' => 'Akt Knyt Diastas 4',
			'akt_knyt_diastas_5' => 'Akt Knyt Diastas 5',
			'flex_pass_handled' => 'Flex Pass Handled',
			'ext_pass_handled' => 'Ext Pass Handled',
			'pronation' => 'Pronation',
			'supination' => 'Supination',
			'kommentar' => 'Kommentar',
			'soll_icke_op_sida' => 'Soll Icke Op Sida',
			'opkod_1' => 'Opkod 1',
			'opkod_2' => 'Opkod 2',
			'opkod_3' => 'Opkod 3',
			'opkod_4' => 'Opkod 4',
			'ext_pas_arm' => 'Ext Pas Arm',
			'ext_akt_arm' => 'Ext Akt Arm',
			'ext_avl_arm' => 'Ext Avl Arm',
			'styrka_ext_arm' => 'Styrka Ext Arm',
			'styrka_flex_arm' => 'Styrka Flex Arm',
			'flexion_mcp1' => 'Flexion Mcp1',
			'extension_ip' => 'Extension Ip',
			'flexion_ip' => 'Flexion Ip',
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
		$criteria->compare('grepp',$this->grepp,true);
		$criteria->compare('styrka_helhand',$this->styrka_helhand,true);
		$criteria->compare('stryka_nyckelgrepp',$this->stryka_nyckelgrepp,true);
		$criteria->compare('akt_knyt_diastas_1',$this->akt_knyt_diastas_1,true);
		$criteria->compare('akt_knyt_diastas_2',$this->akt_knyt_diastas_2,true);
		$criteria->compare('akt_knyt_diastas_3',$this->akt_knyt_diastas_3,true);
		$criteria->compare('akt_knyt_diastas_4',$this->akt_knyt_diastas_4,true);
		$criteria->compare('flex_pass_handled',$this->flex_pass_handled);
		$criteria->compare('ext_pass_handled',$this->ext_pass_handled);
		$criteria->compare('pronation',$this->pronation);
		$criteria->compare('supination',$this->supination);
		$criteria->compare('kommentar',$this->kommentar,true);
		$criteria->compare('akt_knyt_diastas_5',$this->akt_knyt_diastas_5,true);
		$criteria->compare('soll_icke_op_sida',$this->soll_icke_op_sida);
		$criteria->compare('opkod_1',$this->opkod_1);
		$criteria->compare('opkod_2',$this->opkod_2);
		$criteria->compare('opkod_3',$this->opkod_3);
		$criteria->compare('opkod_4',$this->opkod_4);
		$criteria->compare('ext_pas_arm',$this->ext_pas_arm);
		$criteria->compare('ext_akt_arm',$this->ext_akt_arm);
		$criteria->compare('ext_avl_arm',$this->ext_avl_arm);
		$criteria->compare('styrka_ext_arm',$this->styrka_ext_arm);
		$criteria->compare('styrka_flex_arm',$this->styrka_flex_arm);
		$criteria->compare('flexion_mcp1',$this->flexion_mcp1);
		$criteria->compare('extension_ip',$this->extension_ip);
		$criteria->compare('flexion_ip',$this->flexion_ip);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aterhand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
