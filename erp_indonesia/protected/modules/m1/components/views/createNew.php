<br /><ul class="nav nav-list">	<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(			'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'			'buttons'=>array(					array('label'=>'Create New', 'items'=>array(							array('label'=>'Purchase Order', 'url'=>Yii::app()->createUrl('/m1/aPorder/create')),							array('label'=>'Purchase Order Department', 'url'=>Yii::app()->createUrl('/m1/aPorder/createDept')),							'---',							//array('label'=>'Inventory', 'url'=>Yii::app()->createUrl('/vPorderInventory/create')),							//array('label'=>'General', 'url'=>Yii::app()->createUrl('/vPorderGeneral/create')),					)),			),	)); ?></ul><br />