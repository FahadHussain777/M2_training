<?php
namespace PlumTree\CustomForm\Controller\Page1;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Listing extends \Magento\Framework\App\Action\Action
{
    //@ Class variables

    protected $resultPageFactory;
    

    public function __construct(Context $context,PageFactory $resultPageFactory,PostingsFactory $PostingsFactory)
    {
        $this->resultPageFactory = $resultPageFactory;      
        parent::__construct($context);
    }
        
    public function execute()
    {        
        return $this->resultPageFactory->create();
    }
}
