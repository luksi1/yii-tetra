<?php $this->beginContent('//layouts/main'); ?>
<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'model' => Befolkningsinfo::model(),
		'attribute' => 'enamn',
                'source'=>$this->createUrl('AutoComplete/GetName'), // always define the correct path in Url..
                'value' => "",
                'options' => array(
                    'minChars'=>1,
                    'autoFill'=>false,
                    'focus'=> 'js:function( event, ui ) {
                        $( "#test_autocomplete" ).val( ui.item.label );
                        return false;
                    }',
                    'select'=>'js:function( event, ui ) {
                        return false;
                    }'
                ),
                'htmlOptions'=>array( 'autocomplete'=>'off'),
            )); ?>

	<?php echo $content; ?>
<?php $this->endContent(); ?>

