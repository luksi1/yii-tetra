<?php

/**
 * This is the model class for table "muskelstatus".
 *
 * The followings are the available columns in table 'muskelstatus':
 * @property string $personnummer
 * @property string $trapezius_vanster
 * @property string $trapezius_hoger
 * @property string $latissimus_vanster
 * @property string $latissimus_hoger
 * @property string $del_dorsalis_hoger
 * @property string $del_intermed_hoger
 * @property string $del_ventrali_hoger
 * @property string $del_intermed_vanst
 * @property string $del_ventrali_vanst
 * @property string $del_dorsalis_vanst
 * @property string $serratus_hoger
 * @property string $serratus_vanster
 * @property string $utatrotation_vanst
 * @property string $utatrotation_hog
 * @property string $inatrotation_hoger
 * @property string $inatroation_vanste
 * @property string $pec_clav_hoger
 * @property string $pec_sterno_vanster
 * @property string $pec_clav_vanster
 * @property string $pec_sterno_hoger
 * @property string $triceps_hoger
 * @property string $triceps_vanster
 * @property string $biceps_brach_hoger
 * @property string $biceps_brach_vanst
 * @property string $brachiorad_hoger
 * @property string $brachiorad_vanster
 * @property string $ecrb_vanster
 * @property string $ecrb_hoger
 * @property string $pronator_hoger
 * @property string $pronator_vanster
 * @property string $supinator_hoger
 * @property string $supinator_vanster
 * @property string $fcr_hoger
 * @property string $fcr_vanster
 * @property string $edq_hoger
 * @property string $edq_vanster
 * @property string $fdp_vanster
 * @property string $fdp_hoger
 * @property string $epl_vanster
 * @property string $epl_hoger
 * @property string $apl_vanster
 * @property string $apl_hoger
 * @property string $fpl_vanster
 * @property string $fpl_hoger
 * @property string $intrinsic_hoger
 * @property string $intrinsic_vanster
 * @property string $spasticitet
 * @property integer $handled_volar_hog
 * @property integer $handled_volar_van
 * @property integer $handled_dors_hog
 * @property integer $handled_dors_van
 * @property integer $mcp_1_hog_ext
 * @property integer $mcp_2_hog_ext
 * @property integer $mcp_3_hog_ext
 * @property integer $mcp_4_hog_ext
 * @property integer $mcp_5_hog_ext
 * @property integer $mcp_1_van_ext
 * @property integer $mcp_2_van_ext
 * @property integer $mcp_3_van_ext
 * @property integer $mcp_4_van_ext
 * @property integer $mcp_5_van_ext
 * @property integer $ip_1_van_ext
 * @property integer $ip_1_hog_ext
 * @property integer $pip_2_van_ext
 * @property integer $pip_3_van_ext
 * @property integer $pip_4_van_ext
 * @property integer $pip_5_van_ext
 * @property integer $pip_2_hog_ext
 * @property integer $pip_3_hog_ext
 * @property integer $pip_4_hog_ext
 * @property integer $pip_5_hog_ext
 * @property string $sensi_1_hog
 * @property string $sensi_2_hog
 * @property string $sensi_3_hog
 * @property string $sensi_4_hog
 * @property string $sensi_5_hog
 * @property string $sensi_1_van
 * @property string $sensi_2_van
 * @property string $sensi_3_van
 * @property string $sensi_4_van
 * @property string $sensi_5_van
 * @property string $anmarkningar
 * @property integer $mcp_1_hog_flex
 * @property integer $mcp_2_hog_flex
 * @property integer $mcp_3_hog_flex
 * @property integer $mcp_4_hog_flex
 * @property integer $mcp_5_hog_flex
 * @property integer $mcp_1_van_flex
 * @property integer $mcp_2_van_flex
 * @property integer $mcp_3_van_flex
 * @property integer $mcp_4_van_flex
 * @property integer $mcp_5_van_flex
 * @property integer $ip_1_van_flex
 * @property integer $pip_2_van_flex
 * @property integer $pip_3_van_flex
 * @property integer $pip_4_van_flex
 * @property integer $pip_5_van_flex
 * @property integer $ip_1_hog_flex
 * @property integer $pip_2_hog_flex
 * @property integer $pip_3_hog_flex
 * @property integer $pip_4_hog_flex
 * @property integer $pip_5_hog_flex
 * @property integer $arm_hog_ext
 * @property integer $arm_van_ext
 * @property integer $arm_hog_flex
 * @property integer $arm_van_flex
 * @property integer $supination_hoger
 * @property integer $supination_vanster
 * @property integer $pronation_hoger
 * @property integer $pronation_vanster
 * @property string $spontan_finger_st
 *
 * The followings are the available model relations:
 * @property Befolkningsinfo $personnummer0
 */
class Muskelstatus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'muskelstatus';
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
			array('handled_volar_hog, handled_volar_van, handled_dors_hog, handled_dors_van, mcp_1_hog_ext, mcp_2_hog_ext, mcp_3_hog_ext, mcp_4_hog_ext, mcp_5_hog_ext, mcp_1_van_ext, mcp_2_van_ext, mcp_3_van_ext, mcp_4_van_ext, mcp_5_van_ext, ip_1_van_ext, ip_1_hog_ext, pip_2_van_ext, pip_3_van_ext, pip_4_van_ext, pip_5_van_ext, pip_2_hog_ext, pip_3_hog_ext, pip_4_hog_ext, pip_5_hog_ext, mcp_1_hog_flex, mcp_2_hog_flex, mcp_3_hog_flex, mcp_4_hog_flex, mcp_5_hog_flex, mcp_1_van_flex, mcp_2_van_flex, mcp_3_van_flex, mcp_4_van_flex, mcp_5_van_flex, ip_1_van_flex, pip_2_van_flex, pip_3_van_flex, pip_4_van_flex, pip_5_van_flex, ip_1_hog_flex, pip_2_hog_flex, pip_3_hog_flex, pip_4_hog_flex, pip_5_hog_flex, arm_hog_ext, arm_van_ext, arm_hog_flex, arm_van_flex, supination_hoger, supination_vanster, pronation_hoger, pronation_vanster', 'numerical', 'integerOnly'=>true),
			array('personnummer', 'length', 'max'=>12),
			array('trapezius_vanster, trapezius_hoger, latissimus_vanster, latissimus_hoger, del_dorsalis_hoger, del_intermed_hoger, del_ventrali_hoger, del_intermed_vanst, del_ventrali_vanst, del_dorsalis_vanst, serratus_hoger, serratus_vanster, utatrotation_vanst, utatrotation_hog, inatrotation_hoger, inatroation_vanste, pec_clav_hoger, pec_sterno_vanster, pec_clav_vanster, pec_sterno_hoger, triceps_hoger, triceps_vanster, biceps_brach_hoger, biceps_brach_vanst, brachiorad_hoger, brachiorad_vanster, ecrb_vanster, ecrb_hoger, pronator_hoger, pronator_vanster, supinator_hoger, supinator_vanster, fcr_hoger, fcr_vanster, edq_hoger, edq_vanster, fdp_vanster, fdp_hoger, epl_vanster, epl_hoger, apl_vanster, apl_hoger, fpl_vanster, fpl_hoger, intrinsic_hoger, intrinsic_vanster', 'length', 'max'=>5),
			array('spasticitet', 'length', 'max'=>80),
			array('sensi_1_hog, sensi_2_hog, sensi_3_hog, sensi_4_hog, sensi_5_hog, sensi_1_van, sensi_2_van, sensi_3_van, sensi_4_van, sensi_5_van', 'length', 'max'=>3),
			array('anmarkningar', 'length', 'max'=>150),
			array('spontan_finger_st', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnummer, trapezius_vanster, trapezius_hoger, latissimus_vanster, latissimus_hoger, del_dorsalis_hoger, del_intermed_hoger, del_ventrali_hoger, del_intermed_vanst, del_ventrali_vanst, del_dorsalis_vanst, serratus_hoger, serratus_vanster, utatrotation_vanst, utatrotation_hog, inatrotation_hoger, inatroation_vanste, pec_clav_hoger, pec_sterno_vanster, pec_clav_vanster, pec_sterno_hoger, triceps_hoger, triceps_vanster, biceps_brach_hoger, biceps_brach_vanst, brachiorad_hoger, brachiorad_vanster, ecrb_vanster, ecrb_hoger, pronator_hoger, pronator_vanster, supinator_hoger, supinator_vanster, fcr_hoger, fcr_vanster, edq_hoger, edq_vanster, fdp_vanster, fdp_hoger, epl_vanster, epl_hoger, apl_vanster, apl_hoger, fpl_vanster, fpl_hoger, intrinsic_hoger, intrinsic_vanster, spasticitet, handled_volar_hog, handled_volar_van, handled_dors_hog, handled_dors_van, mcp_1_hog_ext, mcp_2_hog_ext, mcp_3_hog_ext, mcp_4_hog_ext, mcp_5_hog_ext, mcp_1_van_ext, mcp_2_van_ext, mcp_3_van_ext, mcp_4_van_ext, mcp_5_van_ext, ip_1_van_ext, ip_1_hog_ext, pip_2_van_ext, pip_3_van_ext, pip_4_van_ext, pip_5_van_ext, pip_2_hog_ext, pip_3_hog_ext, pip_4_hog_ext, pip_5_hog_ext, sensi_1_hog, sensi_2_hog, sensi_3_hog, sensi_4_hog, sensi_5_hog, sensi_1_van, sensi_2_van, sensi_3_van, sensi_4_van, sensi_5_van, anmarkningar, mcp_1_hog_flex, mcp_2_hog_flex, mcp_3_hog_flex, mcp_4_hog_flex, mcp_5_hog_flex, mcp_1_van_flex, mcp_2_van_flex, mcp_3_van_flex, mcp_4_van_flex, mcp_5_van_flex, ip_1_van_flex, pip_2_van_flex, pip_3_van_flex, pip_4_van_flex, pip_5_van_flex, ip_1_hog_flex, pip_2_hog_flex, pip_3_hog_flex, pip_4_hog_flex, pip_5_hog_flex, arm_hog_ext, arm_van_ext, arm_hog_flex, arm_van_flex, supination_hoger, supination_vanster, pronation_hoger, pronation_vanster, spontan_finger_st', 'safe', 'on'=>'search'),
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
			'trapezius_vanster' => 'Trapezius Vänster',
			'trapezius_hoger' => 'Trapezius Höger',
			'latissimus_vanster' => 'Latissimus Vänster',
			'latissimus_hoger' => 'Latissimus Höger',
			'del_dorsalis_hoger' => 'Del Dorsalis Höger',
			'del_intermed_hoger' => 'Del Intermed Höger',
			'del_ventrali_hoger' => 'Del Ventrali Höger',
			'del_intermed_vanst' => 'Del Intermed Vänster',
			'del_ventrali_vanst' => 'Del Ventrali Vänster',
			'del_dorsalis_vanst' => 'Del Dorsalis Vänster',
			'serratus_hoger' => 'Serratus Höger',
			'serratus_vanster' => 'Serratus Vänster',
			'utatrotation_vanst' => 'Utatrotation Vänster',
			'utatrotation_hog' => 'Utatrotation Höger',
			'inatrotation_hoger' => 'Inatrotation Höger',
			'inatroation_vanste' => 'Inatroation Vänster',
			'pec_clav_hoger' => 'Pec Clav Höger',
			'pec_sterno_vanster' => 'Pec Sterno Vänster',
			'pec_clav_vanster' => 'Pec Clav Vänster',
			'pec_sterno_hoger' => 'Pec Sterno Höger',
			'triceps_hoger' => 'Triceps Höger',
			'triceps_vanster' => 'Triceps Vänster',
			'biceps_brach_hoger' => 'Biceps Brach Höger',
			'biceps_brach_vanst' => 'Biceps Brach Vänster',
			'brachiorad_hoger' => 'Brachiorad Höger',
			'brachiorad_vanster' => 'Brachiorad Vänster',
			'ecrb_vanster' => 'Ecrb Vänster',
			'ecrb_hoger' => 'Ecrb Höger',
			'pronator_hoger' => 'Pronator Höger',
			'pronator_vanster' => 'Pronator Vänster',
			'supinator_hoger' => 'Supinator Höger',
			'supinator_vanster' => 'Supinator Vänster',
			'fcr_hoger' => 'Fcr Höger',
			'fcr_vanster' => 'Fcr Vänster',
			'edq_hoger' => 'Edq Höger',
			'edq_vanster' => 'Edq Vänster',
			'fdp_vanster' => 'Fdp Vänster',
			'fdp_hoger' => 'Fdp Höger',
			'epl_vanster' => 'Epl Vänster',
			'epl_hoger' => 'Epl Höger',
			'apl_vanster' => 'Apl Vänster',
			'apl_hoger' => 'Apl Höger',
			'fpl_vanster' => 'Fpl Vänster',
			'fpl_hoger' => 'Fpl Höger',
			'intrinsic_hoger' => 'Intrinsic Höger',
			'intrinsic_vanster' => 'Intrinsic Vänster',
			'spasticitet' => 'Spasticitet',
			'handled_volar_hog' => 'Handled Volar Höger',
			'handled_volar_van' => 'Handled Volar Vänster',
			'handled_dors_hog' => 'Handled Dors Höger',
			'handled_dors_van' => 'Handled Dors Vänster',
			'mcp_1_hog_ext' => 'Mcp 1 Höger Ext',
			'mcp_2_hog_ext' => 'Mcp 2 Höger Ext',
			'mcp_3_hog_ext' => 'Mcp 3 Höger Ext',
			'mcp_4_hog_ext' => 'Mcp 4 Höger Ext',
			'mcp_5_hog_ext' => 'Mcp 5 Höger Ext',
			'mcp_1_van_ext' => 'Mcp 1 Vänster Ext',
			'mcp_2_van_ext' => 'Mcp 2 Vänster Ext',
			'mcp_3_van_ext' => 'Mcp 3 Vänster Ext',
			'mcp_4_van_ext' => 'Mcp 4 Vänster Ext',
			'mcp_5_van_ext' => 'Mcp 5 Vänster Ext',
			'ip_1_van_ext' => 'Ip 1 Vänster Ext',
			'ip_1_hog_ext' => 'Ip 1 Höger Ext',
			'pip_2_van_ext' => 'Pip 2 Vänster Ext',
			'pip_3_van_ext' => 'Pip 3 Vänster Ext',
			'pip_4_van_ext' => 'Pip 4 Vänster Ext',
			'pip_5_van_ext' => 'Pip 5 Vänster Ext',
			'pip_2_hog_ext' => 'Pip 2 Höger Ext',
			'pip_3_hog_ext' => 'Pip 3 Höger Ext',
			'pip_4_hog_ext' => 'Pip 4 Höger Ext',
			'pip_5_hog_ext' => 'Pip 5 Höger Ext',
			'sensi_1_hog' => 'Sensi 1 Höger',
			'sensi_2_hog' => 'Sensi 2 Höger',
			'sensi_3_hog' => 'Sensi 3 Höger',
			'sensi_4_hog' => 'Sensi 4 Höger',
			'sensi_5_hog' => 'Sensi 5 Höger',
			'sensi_1_van' => 'Sensi 1 Vänster',
			'sensi_2_van' => 'Sensi 2 Vänster',
			'sensi_3_van' => 'Sensi 3 Vänster',
			'sensi_4_van' => 'Sensi 4 Vänster',
			'sensi_5_van' => 'Sensi 5 Vänster',
			'anmarkningar' => 'Anmarkningar',
			'mcp_1_hog_flex' => 'Mcp 1 Höger Flex',
			'mcp_2_hog_flex' => 'Mcp 2 Höger Flex',
			'mcp_3_hog_flex' => 'Mcp 3 Höger Flex',
			'mcp_4_hog_flex' => 'Mcp 4 Höger Flex',
			'mcp_5_hog_flex' => 'Mcp 5 Höger Flex',
			'mcp_1_van_flex' => 'Mcp 1 Vänster Flex',
			'mcp_2_van_flex' => 'Mcp 2 Vänster Flex',
			'mcp_3_van_flex' => 'Mcp 3 Vänster Flex',
			'mcp_4_van_flex' => 'Mcp 4 Vänster Flex',
			'mcp_5_van_flex' => 'Mcp 5 Vänster Flex',
			'pip_1_van_flex' => 'Pip 1 Vänster Flex',
			'pip_2_van_flex' => 'Pip 2 Vänster Flex',
			'pip_3_van_flex' => 'Pip 3 Vänster Flex',
			'pip_4_van_flex' => 'Pip 4 Vänster Flex',
			'pip_5_van_flex' => 'Pip 5 Vänster Flex',
			'pip_1_hog_flex' => 'Pip 1 Höger Flex',
			'pip_2_van_ext' => 'Pip 2 Vänster Ext',
			'pip_2_hog_flex' => 'Pip 2 Höger Flex',
			'pip_3_hog_flex' => 'Pip 3 Höger Flex',
			'pip_4_hog_flex' => 'Pip 4 Höger Flex',
			'pip_5_hog_flex' => 'Pip 5 Höger Flex',
			'arm_hog_ext' => 'Arm Höger Ext',
			'arm_van_ext' => 'Arm Vänster Ext',
			'arm_hog_flex' => 'Arm Höger Flex',
			'arm_van_flex' => 'Arm Vänster Flex',
			'supination_hoger' => 'Supination Höger',
			'supination_vanster' => 'Supination Vänster',
			'pronation_hoger' => 'Pronation Höger',
			'pronation_vanster' => 'Pronation Vänster',
			'spontan_finger_st' => 'Spontan Finger St',
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
		$criteria->compare('trapezius_vanster',$this->trapezius_vanster,true);
		$criteria->compare('trapezius_hoger',$this->trapezius_hoger,true);
		$criteria->compare('latissimus_vanster',$this->latissimus_vanster,true);
		$criteria->compare('latissimus_hoger',$this->latissimus_hoger,true);
		$criteria->compare('del_dorsalis_hoger',$this->del_dorsalis_hoger,true);
		$criteria->compare('del_intermed_hoger',$this->del_intermed_hoger,true);
		$criteria->compare('del_ventrali_hoger',$this->del_ventrali_hoger,true);
		$criteria->compare('del_intermed_vanst',$this->del_intermed_vanst,true);
		$criteria->compare('del_ventrali_vanst',$this->del_ventrali_vanst,true);
		$criteria->compare('del_dorsalis_vanst',$this->del_dorsalis_vanst,true);
		$criteria->compare('serratus_hoger',$this->serratus_hoger,true);
		$criteria->compare('serratus_vanster',$this->serratus_vanster,true);
		$criteria->compare('utatrotation_vanst',$this->utatrotation_vanst,true);
		$criteria->compare('utatrotation_hog',$this->utatrotation_hog,true);
		$criteria->compare('inatrotation_hoger',$this->inatrotation_hoger,true);
		$criteria->compare('inatroation_vanste',$this->inatroation_vanste,true);
		$criteria->compare('pec_clav_hoger',$this->pec_clav_hoger,true);
		$criteria->compare('pec_sterno_vanster',$this->pec_sterno_vanster,true);
		$criteria->compare('pec_clav_vanster',$this->pec_clav_vanster,true);
		$criteria->compare('pec_sterno_hoger',$this->pec_sterno_hoger,true);
		$criteria->compare('triceps_hoger',$this->triceps_hoger,true);
		$criteria->compare('triceps_vanster',$this->triceps_vanster,true);
		$criteria->compare('biceps_brach_hoger',$this->biceps_brach_hoger,true);
		$criteria->compare('biceps_brach_vanst',$this->biceps_brach_vanst,true);
		$criteria->compare('brachiorad_hoger',$this->brachiorad_hoger,true);
		$criteria->compare('brachiorad_vanster',$this->brachiorad_vanster,true);
		$criteria->compare('ecrb_vanster',$this->ecrb_vanster,true);
		$criteria->compare('ecrb_hoger',$this->ecrb_hoger,true);
		$criteria->compare('pronator_hoger',$this->pronator_hoger,true);
		$criteria->compare('pronator_vanster',$this->pronator_vanster,true);
		$criteria->compare('supinator_hoger',$this->supinator_hoger,true);
		$criteria->compare('supinator_vanster',$this->supinator_vanster,true);
		$criteria->compare('fcr_hoger',$this->fcr_hoger,true);
		$criteria->compare('fcr_vanster',$this->fcr_vanster,true);
		$criteria->compare('edq_hoger',$this->edq_hoger,true);
		$criteria->compare('edq_vanster',$this->edq_vanster,true);
		$criteria->compare('fdp_vanster',$this->fdp_vanster,true);
		$criteria->compare('fdp_hoger',$this->fdp_hoger,true);
		$criteria->compare('epl_vanster',$this->epl_vanster,true);
		$criteria->compare('epl_hoger',$this->epl_hoger,true);
		$criteria->compare('apl_vanster',$this->apl_vanster,true);
		$criteria->compare('apl_hoger',$this->apl_hoger,true);
		$criteria->compare('fpl_vanster',$this->fpl_vanster,true);
		$criteria->compare('fpl_hoger',$this->fpl_hoger,true);
		$criteria->compare('intrinsic_hoger',$this->intrinsic_hoger,true);
		$criteria->compare('intrinsic_vanster',$this->intrinsic_vanster,true);
		$criteria->compare('spasticitet',$this->spasticitet,true);
		$criteria->compare('handled_volar_hog',$this->handled_volar_hog);
		$criteria->compare('handled_volar_van',$this->handled_volar_van);
		$criteria->compare('handled_dors_hog',$this->handled_dors_hog);
		$criteria->compare('handled_dors_van',$this->handled_dors_van);
		$criteria->compare('mcp_1_hog_ext',$this->mcp_1_hog_ext);
		$criteria->compare('mcp_2_hog_ext',$this->mcp_2_hog_ext);
		$criteria->compare('mcp_3_hog_ext',$this->mcp_3_hog_ext);
		$criteria->compare('mcp_4_hog_ext',$this->mcp_4_hog_ext);
		$criteria->compare('mcp_5_hog_ext',$this->mcp_5_hog_ext);
		$criteria->compare('mcp_1_van_ext',$this->mcp_1_van_ext);
		$criteria->compare('mcp_2_van_ext',$this->mcp_2_van_ext);
		$criteria->compare('mcp_3_van_ext',$this->mcp_3_van_ext);
		$criteria->compare('mcp_4_van_ext',$this->mcp_4_van_ext);
		$criteria->compare('mcp_5_van_ext',$this->mcp_5_van_ext);
		$criteria->compare('ip_1_van_ext',$this->ip_1_van_ext);
		$criteria->compare('ip_1_hog_ext',$this->ip_1_hog_ext);
		$criteria->compare('pip_2_van_ext',$this->pip_2_van_ext);
		$criteria->compare('pip_3_van_ext',$this->pip_3_van_ext);
		$criteria->compare('pip_4_van_ext',$this->pip_4_van_ext);
		$criteria->compare('pip_5_van_ext',$this->pip_5_van_ext);
		$criteria->compare('pip_2_hog_ext',$this->pip_2_hog_ext);
		$criteria->compare('pip_3_hog_ext',$this->pip_3_hog_ext);
		$criteria->compare('pip_4_hog_ext',$this->pip_4_hog_ext);
		$criteria->compare('pip_5_hog_ext',$this->pip_5_hog_ext);
		$criteria->compare('sensi_1_hog',$this->sensi_1_hog,true);
		$criteria->compare('sensi_2_hog',$this->sensi_2_hog,true);
		$criteria->compare('sensi_3_hog',$this->sensi_3_hog,true);
		$criteria->compare('sensi_4_hog',$this->sensi_4_hog,true);
		$criteria->compare('sensi_5_hog',$this->sensi_5_hog,true);
		$criteria->compare('sensi_1_van',$this->sensi_1_van,true);
		$criteria->compare('sensi_2_van',$this->sensi_2_van,true);
		$criteria->compare('sensi_3_van',$this->sensi_3_van,true);
		$criteria->compare('sensi_4_van',$this->sensi_4_van,true);
		$criteria->compare('sensi_5_van',$this->sensi_5_van,true);
		$criteria->compare('anmarkningar',$this->anmarkningar,true);
		$criteria->compare('mcp_1_hog_flex',$this->mcp_1_hog_flex);
		$criteria->compare('mcp_2_hog_flex',$this->mcp_2_hog_flex);
		$criteria->compare('mcp_3_hog_flex',$this->mcp_3_hog_flex);
		$criteria->compare('mcp_4_hog_flex',$this->mcp_4_hog_flex);
		$criteria->compare('mcp_5_hog_flex',$this->mcp_5_hog_flex);
		$criteria->compare('mcp_1_van_flex',$this->mcp_1_van_flex);
		$criteria->compare('mcp_2_van_flex',$this->mcp_2_van_flex);
		$criteria->compare('mcp_3_van_flex',$this->mcp_3_van_flex);
		$criteria->compare('mcp_4_van_flex',$this->mcp_4_van_flex);
		$criteria->compare('mcp_5_van_flex',$this->mcp_5_van_flex);
		$criteria->compare('ip_1_van_flex',$this->ip_1_van_flex);
		$criteria->compare('pip_2_van_flex',$this->pip_2_van_flex);
		$criteria->compare('pip_3_van_flex',$this->pip_3_van_flex);
		$criteria->compare('pip_4_van_flex',$this->pip_4_van_flex);
		$criteria->compare('pip_5_van_flex',$this->pip_5_van_flex);
		$criteria->compare('ip_1_hog_flex',$this->ip_1_hog_flex);
		$criteria->compare('pip_2_hog_flex',$this->pip_2_hog_flex);
		$criteria->compare('pip_3_hog_flex',$this->pip_3_hog_flex);
		$criteria->compare('pip_4_hog_flex',$this->pip_4_hog_flex);
		$criteria->compare('pip_5_hog_flex',$this->pip_5_hog_flex);
		$criteria->compare('arm_hog_ext',$this->arm_hog_ext);
		$criteria->compare('arm_van_ext',$this->arm_van_ext);
		$criteria->compare('arm_hog_flex',$this->arm_hog_flex);
		$criteria->compare('arm_van_flex',$this->arm_van_flex);
		$criteria->compare('supination_hoger',$this->supination_hoger);
		$criteria->compare('supination_vanster',$this->supination_vanster);
		$criteria->compare('pronation_hoger',$this->pronation_hoger);
		$criteria->compare('pronation_vanster',$this->pronation_vanster);
		$criteria->compare('spontan_finger_st',$this->spontan_finger_st,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Muskelstatus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
