<?php
namespace PlumTree\CustomForm\Controller\Adminhtml\Grid;
class Index extends \Magento\Backend\App\Action
{
    
    const ADMIN_RESOURCE = 'Grid';       
        
    protected $resultPageFactory;
    protected $resultPage;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        if(is_null($this->resultPage))
        {
            $this->resultPage = $this->resultPageFactory->create();
        }
        $this->resultPage->setActivemenu('PlumTree_CustomForm::top');
        $this->resultPage->getConfig()->getTitle()->prepend((__('Custom Form')));
        return $this->resultPage;
    }

    protected function _isAllowed()
    { 
        return $this->_authorization->isAllowed('PlumTree_CustomForm::config'); 
    }
}
