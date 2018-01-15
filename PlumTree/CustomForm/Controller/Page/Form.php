<?php
namespace PlumTree\CustomForm\Controller\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \PlumTree\CustomForm\Model\PostingsFactory;
use \Magento\Framework\Controller\ResultFactory;
class Form extends \Magento\Framework\App\Action\Action
{
    //@ Class variables

    protected $resultPageFactory;
    protected $PostingsFactory;
    protected $title;
    protected $description;

    public function __construct(Context $context,PageFactory $resultPageFactory,PostingsFactory $PostingsFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->PostingsFactory= $PostingsFactory;        
        parent::__construct($context);
    }
        
    public function execute()
    {
        $post= (array) $this->getRequest()->getPost();
        if (!empty($post))
        {
            $this->title= $post['title'];
            $this->description=$post['description'];
            $PostingsModel=$this->PostingsFactory->create();
            $PostingsModel->setData('title',$this->title)->save();
            $PostingsModel->setData('description',$this->description)->save();           
            $this->messageManager->addSuccessMessage("Thanks for your feedback.Must naha dho ke!");
            $resultRedirect=$this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/customform/page/form');
            return $resultRedirect;
        }

        
        $this->_view->loadLayout();
        $this->_view->renderLayout();   
    }
}
