<?php
namespace Plumtree\CustomForm\Controller\Adminhtml\Grid;

class Edit extends \Magento\Backend\App\Action {
	
	
	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed("Plumtree_CustomForm::grid_edit");
	}
	

?>