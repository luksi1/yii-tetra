<?php
class AutoCompleteController extends CController
{
    public function actionGetName()
    {
        $term = Yii::app()->request->getQuery('term');
        $aPnr = Befolkningsinfo::model()->findAll("personnummer LIKE '%$term%'");
        $aFnamn = Befolkningsinfo::model()->findAll("fnamn LIKE '%$term%'");
        $aEnamn = Befolkningsinfo::model()->findAll("enamn LIKE '%$term%'");
	$aResults = array_merge($aPnr, $aFnamn, $aEnamn);
        $aLists = array();
        foreach($aResults as $item) {
            $aLists[] = array(
                'id' => $item->personnummer,
		'label' => $item->enamn . ", " . $item->fnamn,
            );
        }
	$this->layout='empty';
        echo CJSON::encode($aLists);
    }
}
?>
