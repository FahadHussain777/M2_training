<?php 
namespace PlumTree\CustomForm\Controller\Adminhtml\Grid;

class Delete extends \Magento\Backend\App\Action {
	
	
	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed("Plumtree_CustomForm::grid_delete");
	}
	
	
	public function execute()
	{
		$id = $this->getRequest()->getParam("post_id");		
		$resultRedirect = $this->resultRedirectFactory->create();

		if ($id) 
		{
			try 
			{
				$model = $this->_objectManager->create("PlumTree\CustomForm\Model\Postings");
				$model->load($id);
				$model->delete();
				$this->messageManager->addSuccess(__("The Item has been deleted."));				
				return $resultRedirect->setPath("*/*/");
			} 
			catch (\Exception $e) 
			{
				$this->messageManager->addError($e->getMessage());
				return $resultRedirect->setPath("*/*/edit", ["post_id" => $id]);
			}
		}
		$this->messageManager->addError(__("We can't find the item to delete."));
		return $resultRedirect->setPath("*/*/");
	}

	
		
}
?>