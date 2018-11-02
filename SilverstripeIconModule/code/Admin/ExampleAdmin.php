<?php
use SilverStripe\Admin\ModelAdmin;
use SilverStripe\ORM\DataObject;

class YourClass extends ModelAdmin {
	private static $managed_models = array(
		YourClass::class,
	);

	private static $url_segment = 'YourClass';

	private static $menu_title = 'YourClass';

    private static $menu_icon_class = 'fas fa-quote-right';

	public function getEditForm($id = null, $fields = null) {
		$form = parent::getEditForm($id, $fields);

		// $gridFieldName is generated from the ModelClass, eg if the Class 'Product'
		// is managed by this ModelAdmin, the GridField for it will also be named 'Product'

		$gridFieldName = $this->sanitiseClassName($this->modelClass);
		$gridField = $form->Fields()->fieldByName($gridFieldName);

		// modify the list view.
//		$gridField->getConfig()->addComponent(new GridFieldResendButton());

		return $form;
	}


}