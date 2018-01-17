<?php
namespace PlumTree\CustomForm\Controller\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \PlumTree\CustomForm\Model\PostingsFactory;
use \Magento\Framework\Controller\ResultFactory;
use \Magento\Framework\Data\Form\FormKey\Validator;

class Form extends \Magento\Framework\App\Action\Action
{
    
    //@ Injected Class private variables 

    protected $resultPageFactory;
    protected $PostingsFactory;
    protected $formKeyValidator;

    //@ Post variables

    private $data = array('title','description');

    //@ Constructor function 
    
    public function __construct(Context $context,PageFactory $resultPageFactory,PostingsFactory $PostingsFactory,Validator  $formKeyValidator)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->PostingsFactory= $PostingsFactory;
        $this->formKeyValidator = $formKeyValidator;        
        parent::__construct($context);
    }
        
    public function execute()
    {
        
        $post= (array) $this->getRequest()->getPost();


        if (!empty($post))
        {
            if($this->formKeyValidator->validate($this->_request))
            {       

                $PostingsModel=$this->PostingsFactory->create();
                
                foreach ($this->data as $key )                 
                {
                    $PostingsModel->setData($key,$post[$key])->save();
                }

                $this->messageManager->addSuccessMessage("Thanks for your feedback");
                $resultRedirect=$this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                $resultRedirect->setUrl($this->_redirect->getRefererUrl());
                return $resultRedirect;

            }

            else                
            {
                $this->messageManager->addErrorMessage("Invalid form key")  ;
            }

        }

        else
        {
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->getConfig()->getTitle()->set(__('Custom Form'));
            return $resultPage;
        }
        
    }
    

}
